<?php

declare(strict_types = 1);

namespace Drupal\facets_date_range\Plugin\facets\widget;

use Drupal\Core\Form\FormStateInterface;
use Drupal\facets\FacetInterface;
use Drupal\facets\Widget\WidgetPluginBase;

/**
 * The Date Range widget.
 *
 * @FacetsWidget(
 *   id = "date_range",
 *   label = @Translation("Date Range Picker"),
 *   description = @Translation("A widget that shows a Date Range Picker."),
 * )
 */
class DateRangeWidget extends WidgetPluginBase {

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet): array {
    $build = parent::build($facet);
    $results = $facet->getResults();
    if (empty($results)) {
      return $build;
    }

    ksort($results);

    $active = $facet->getActiveItems();
    $min = reset($active)['min'] ?? NULL;
    $max = reset($active)['max'] ?? NULL;

    if (isset($min) && !empty($min)) {
      $min = date('Y-m-d', (int) $min);
    }
    if (isset($max) && !empty($max)) {
      $max = date('Y-m-d', (int) $max);
    }

    $build['#items'] = [
      'min' => [
        '#type' => 'date',
        '#title' => $this->t('Date from'),
        '#value' => $min,
        '#attributes' => [
          'class' => ['facet-date-range'],
          'id' => $facet->id() . '_min',
          'name' => $facet->id() . '_min',
          'data-type' => 'date-range-min',
        ],
      ],
      'max' => [
        '#type' => 'date',
        '#title' => $this->t('Date to'),
        '#value' => $max,
        '#attributes' => [
          'class' => ['facet-date-range'],
          'id' => $facet->id() . '_max',
          'name' => $facet->id() . '_max',
          'data-type' => 'date-range-max',
        ],
      ],
    ];

    $url = array_shift($results)->getUrl()->toString();
    $build['#attached']['library'][] = 'facets_date_range/date-range';
    $build['#attached']['drupalSettings']['facets']['daterange'][$facet->id()] = [
      'url' => $url,
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function isPropertyRequired($name, $type): bool {
    return $name === 'date_range' && $type === 'processors';
  }

  /**
   * {@inheritdoc}
   */
  public function getQueryType(): string {
    return 'range';
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet): array {
    $form += parent::buildConfigurationForm($form, $form_state, $facet);

    $message = $this->t('To achieve the standard behavior of a Date Range Picker, you need to enable the facet setting below <em>"Date Range Picker"</em>.');
    $form['warning'] = [
      '#markup' => '<div class="messages messages--warning">' . $message . '</div>',
    ];

    return $form;
  }

}
