<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\query_type;

use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Support for date range facets within the Search API scope.
 *
 * This query type supports dates for all possible backends. This specific
 * implementation of the query type supports a generic solution of adding facets
 * for dates.
 *
 * If you want to have a specific solution for your backend / module to
 * implement dates, you can alter the ::getQueryTypesForDataType method on the
 * backendPlugin to return a different class.
 *
 * @FacetsQueryType(
 *   id = "search_api_date_picker",
 *   label = @Translation("Datepicker"),
 * )
 */
class SearchApiDatePicker extends SearchApiDateRangePickerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, 'date_picker');
  }

  /**
   * {@inheritdoc}
   */
  public function execute() {
    $query = $this->query;

    // Alter the query here.
    if (!empty($query)) {
      $options = &$query->getOptions();

      $operator = $this->facet->getQueryOperator();
      $field_identifier = $this->facet->getFieldIdentifier();
      $exclude = $this->facet->getExclude();
      $options['search_api_facets'][$field_identifier] = $this->getFacetOptions();

      // Add the filter to the query if there are active values.
      $active_items = $this->facet->getActiveItems();
      $filter = $query->createConditionGroup($operator, ['facet:' . $field_identifier]);
      if (count($active_items)) {
        foreach ($active_items as $value) {
          if ($this->getOverlap()) {
            $this->addConditionGroupsByActiveItemWithOverlap($query, $filter, $exclude, $value, $field_identifier);
          }
          else {
            $this->addConditionGroupsByActiveItem($query, $filter, $exclude, $value, $field_identifier);
          }
        }
        $query->addConditionGroup($filter);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRange($value) {
    $dateTime = new DrupalDateTime('now', 'UTC');

    $startDate = $dateTime::createFromFormat('Y-m-d\TH:i:s', $value . 'T00:00:00');
    $stopDate = $dateTime::createFromFormat('Y-m-d\TH:i:s', $value . 'T23:59:59');

    return [
      'start' => $startDate->format('U'),
      'stop' => $stopDate->format('U'),
    ];
  }

  /**
   * Calculates the result of the filter.
   *
   * @param string $value
   *   The key.
   *
   * @return array
   *   An array with the display and the raw value.
   */
  public function calculateResultFilter($value) {
    return [
      'display' => $this->t('Date'),
      'raw' => $value,
    ];
  }

}
