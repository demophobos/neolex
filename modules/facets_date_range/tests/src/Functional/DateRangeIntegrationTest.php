<?php

declare(strict_types = 1);

namespace Drupal\Tests\facets_date_range\Functional;

use Drupal\Core\Url;
use Drupal\Tests\facets\Functional\FacetsTestBase;

/**
 * Tests the date range facet.
 *
 * @group facets
 */
class DateRangeIntegrationTest extends FacetsTestBase {

  /**
   * {@inheritdoc}
   *
   * @todo Make protected once there is a Facets release that includes this fix.
   * @see https://www.drupal.org/project/facets/issues/3257445
   */
  public static $modules = [
    'views',
    'node',
    'search_api',
    'facets',
    'facets_date_range',
    'block',
    'facets_search_api_dependency',
    'facets_query_processor',
  ];

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();

    $this->drupalLogin($this->adminUser);

    $this->setUpExampleStructure();
    $this->insertExampleContent();
    $this->assertEquals(5, $this->indexItems($this->indexId), '5 items were indexed.');
  }

  /**
   * Tests the date range widget.
   */
  public function testSliderWidget(): void {
    $field_name = 'created';
    $dates = [
      // 2021-01-13.
      1610496000,
      // 2021-02-27.
      1614384000,
      // 2021-04-10.
      1618012800,
      // 2021-04-21.
      1618963200,
      // 2021-05-13.
      1620864000,
      // 2021-06-04.
      1622764800,
      // 2021-07-02.
      1625184000,
      // 2021-07-12.
      1626048000,
      // 2021-07-16.
      1626393600,
      // 2021-09-16.
      1631750400,
    ];
    $entity_test_storage = \Drupal::entityTypeManager()
      ->getStorage('entity_test_mulrev_changed');
    foreach ($dates as $key => $date) {
      $entity_test_storage->create([
        'name' => 'foo date ' . $key,
        'body' => 'test ' . $key . ' test',
        'type' => 'item',
        'keywords' => ['orange'],
        'category' => 'item_category',
        $field_name => $date,
      ])->save();
    }

    // Index all the items.
    $this->indexItems($this->indexId);

    $facet_id = "created";

    $facet_edit_page = 'admin/config/search/facets/' . $facet_id . '/edit';
    $this->createFacet("Created", $facet_id, $field_name);
    $this->drupalGet($facet_edit_page);
    $this->submitForm(['widget' => 'date_range'], 'Configure widget');
    $this->submitForm([
      'widget' => 'date_range',
      'facet_settings[date_range][status]' => TRUE,
    ], 'Save');

    $this->assertSession()->checkboxChecked('edit-facet-settings-date-range-status');

    $this->drupalGet('search-api-test-fulltext');
    $this->assertFacetBlocksAppear();
    $this->assertSession()->pageTextContains('Displaying 15 search results');

    $url = Url::fromUserInput('/search-api-test-fulltext', ['query' => ['f[0]' => 'created:(min:1614384000,max:1620864000)']]);
    $this->drupalGet($url->setAbsolute()->toString());

    $this->assertSession()->pageTextContains('foo date 4');
    $this->assertSession()->pageTextContains('foo date 1');
    $this->assertSession()->pageTextContains('foo date 2');
    $this->assertSession()->pageTextContains('foo date 3');
    $this->assertSession()->pageTextContains('Displaying 4 search results');

    $url = Url::fromUserInput('/search-api-test-fulltext', ['query' => ['f[0]' => 'daterange:(min:,max:1641225702)']]);
    $this->drupalGet($url->setAbsolute()->toString());

    $this->assertSession()->pageTextContains('Displaying 15 search results');

    $url = Url::fromUserInput('/search-api-test-fulltext', ['query' => ['f[0]' => 'daterange:(min:,max:)']]);
    $this->drupalGet($url->setAbsolute()->toString());

    $this->assertSession()->pageTextContains('Displaying 15 search results');
  }

}
