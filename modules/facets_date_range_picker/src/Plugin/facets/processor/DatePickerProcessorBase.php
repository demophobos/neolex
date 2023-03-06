<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\processor;

use Drupal\facets\FacetInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\facets\Processor\BuildProcessorInterface;
use Drupal\facets\Processor\ProcessorPluginBase;

/**
 * The DatePickerProcessor base class.
 */
class DatePickerProcessorBase extends ProcessorPluginBase implements BuildProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet, array $results) {
    return $results;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $this->getConfiguration();

    $build['start_date'] = [
      '#type' => 'select',
      '#title' => $this->t('Start date field'),
      '#options' => $facet->getFacetSource()->getFields(),
      '#default_value' => $this->getConfiguration()['start_date'],
      '#description' => $this->t('The field should be a timestamp field.'),
      '#required' => TRUE,
    ];

    $build['end_date'] = [
      '#type' => 'select',
      '#title' => $this->t('End date field'),
      '#options' => $facet->getFacetSource()->getFields(),
      '#default_value' => $this->getConfiguration()['end_date'],
      '#description' => $this->t('The field should be a timestamp field.'),
      '#required' => TRUE,
    ];

    $build['overlap'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Overlap'),
      '#default_value' => $this->getConfiguration()['overlap'],
      '#description' => $this->t('Allow items to be shown that have started before the range and end within or after range or items that start within range and end after range.'),
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'start_date' => '',
      'end_date' => '',
      'overlap' => 0,
    ];
  }

}
