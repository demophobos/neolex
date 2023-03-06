<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\widget;

use Drupal\facets\FacetInterface;
use Drupal\facets\Widget\WidgetPluginBase;

/**
 * The datepicker widget.
 *
 * @FacetsWidget(
 *   id = "facets_date_range_picker_datepicker",
 *   label = @Translation("Datepicker"),
 *   description = @Translation("A widget that shows a datepicker."),
 * )
 */
class DatePickerWidget extends WidgetPluginBase {

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet) {
    $build = parent::build($facet);

    $active = $facet->getActiveItems();
    $default = '';
    if (isset($active[0])) {
      $default = $active[0];
    }

    $build['#items'] = [];
    $build['#items']['date'] = [
      [
        '#type' => 'date',
        '#title' => $this
          ->t('Select a date'),
        '#default_value' => $default,
        '#attributes' => [
          'type' => 'date',
          'class' => ['facet-datepicker'],
          'id' => $facet->id(),
          'name' => $facet->id(),
          'data-type' => 'datepicker',
          'value' => $default,
        ],
      ],
    ];

    $build['#attached']['library'][] = 'facets/widget';
    $build['#attached']['library'][] = 'facets_date_range_picker/datepicker';

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function isPropertyRequired($name, $type) {
    if (($name === 'date_picker') && $type === 'processors') {
      return TRUE;
    }

    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getQueryType() {
    return 'date_picker';
  }

}
