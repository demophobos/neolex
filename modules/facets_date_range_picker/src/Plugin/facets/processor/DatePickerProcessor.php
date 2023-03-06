<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\processor;

use Drupal\facets\Processor\BuildProcessorInterface;

/**
 * Processes the date range picker input.
 *
 * @FacetsProcessor(
 *   id = "date_picker",
 *   label = @Translation("Date Picker"),
 *   description = @Translation("Display picker options for date fields."),
 *   stages = {
 *     "build" = 35
 *   }
 * )
 */
class DatePickerProcessor extends DatePickerProcessorBase implements BuildProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function getQueryType() {
    return 'date_picker';
  }

}
