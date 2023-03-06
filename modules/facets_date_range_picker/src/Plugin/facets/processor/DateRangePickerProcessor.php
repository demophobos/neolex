<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\processor;

use Drupal\facets\FacetInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\facets\Processor\BuildProcessorInterface;

/**
 * Processes the date range picker input.
 *
 * @FacetsProcessor(
 *   id = "date_range_picker",
 *   label = @Translation("Date Range Picker"),
 *   description = @Translation("Display range picker options for date fields."),
 *   stages = {
 *     "build" = 35
 *   }
 * )
 */
class DateRangePickerProcessor extends DatePickerProcessorBase implements BuildProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $build = parent::buildConfigurationForm($form, $form_state, $facet);

    $this->getConfiguration();

    $build['filter_default'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Filter default'),
      '#default_value' => $this->getConfiguration()['filter_default'],
      '#description' => $this->t('Set the default filter to start from today when no option is selected.'),
    ];

    $build['options'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Options'),
      '#default_value' => $this->getConfiguration()['options'],
      '#options' => [
        'today' => $this->t('Today'),
        'tomorrow' => $this->t('Tomorrow'),
        'this_weekend' => $this->t('This weekend (Sat to Sun)'),
        'this_weekend_long' => $this->t('This weekend (Fri to Sun)'),
        'next_seven_days' => $this->t('Next 7 days'),
        'next_fourteen_days' => $this->t('Next 14 days'),
        'next_thirty_days' => $this->t('Next 30 days'),
        'next_three_months' => $this->t('Next 3 months'),
        'next_six_months' => $this->t('Next 6 months'),
        'next_year' => $this->t('Next year'),

      ],
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getQueryType() {
    return 'date_range_picker';
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $default_configuration = parent::defaultConfiguration();

    $default_configuration['filter_default'] = 0;
    $default_configuration['options'] = [];

    return $default_configuration;
  }

}
