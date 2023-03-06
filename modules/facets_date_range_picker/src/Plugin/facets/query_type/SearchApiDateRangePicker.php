<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\query_type;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\facets\Result\Result;

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
 *   id = "search_api_date_range_picker",
 *   label = @Translation("Date Range Picker"),
 * )
 */
class SearchApiDateRangePicker extends SearchApiDateRangePickerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, 'date_range_picker');

    $configuration = $this->getConfiguration();
    $configuration['filter_default'] = $this->dateProcessorConfig['filter_default'];
    $configuration['options'] = $this->dateProcessorConfig['options'];
    $this->setConfiguration($configuration);
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
      // Add default start date if the default_filter is enabled.
      elseif ($this->getFilterDefault()) {
        $range = $this->calculateDefault();

        $conjunction = $exclude ? 'OR' : 'AND';
        $item_filter = $query->createConditionGroup($conjunction, ['facet:' . $field_identifier]);
        $item_filter->addCondition($this->facet->getFieldIdentifier(), $range['start'], $exclude ? '<' : '>=');
        $filter->addConditionGroup($item_filter);

        $query->addConditionGroup($filter);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRange($value) {
    $dateTime = new DrupalDateTime('now', 'UTC');
    $now = $dateTime;
    $now->setTime(0, 0);

    // Return when value is not an allowed value.
    if (!in_array($value, $this->allowedValue())) {
      return [];
    }

    switch ($value) {
      case 'today':
        $start_date = $end_date = new DrupalDateTime('now', 'UTC');
        break;

      case 'tomorrow':
        $start_date = $end_date = new DrupalDateTime('tomorrow', 'UTC');
        break;

      case 'this_weekend':

        // Today is saturday.
        if ($now->format('N') === '6') {
          $start_date = $now;
          $end_date = $now->modify('+1 day');
        }
        // Today is sunday.
        elseif ($now->format('N') === '7') {
          $start_date = $now;
          $end_date = $now->modify('-1 day');
        }
        // Today is just a weekday.
        else {
          $start_date = new DrupalDateTime('next saturday', 'UTC');
          $end_date = new DrupalDateTime('next sunday', 'UTC');
        }
        break;

      case 'this_weekend_long':

        // Today is friday.
        if ($now->format('N') === '5') {
          $start_date = $now;
          $end_date = $now->modify('+2 days');
        }
        elseif ($now->format('N') === '6') {
          $start_date = $now;
          $end_date = $now->modify('+1 day');
        }
        // Today is sunday.
        elseif ($now->format('N') === '7') {
          $start_date = $now;
          $end_date = $now->modify('-1 day');
        }
        // Today is just a weekday.
        else {
          $start_date = new DrupalDateTime('next friday', 'UTC');
          $end_date = new DrupalDateTime('next sunday', 'UTC');
        }
        break;

      case 'next_seven_days':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+7 days', 'UTC');
        break;

      case 'next_fourteen_days':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+14 days', 'UTC');
        break;

      case 'next_thirty_days':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+30 days', 'UTC');
        break;

      case 'next_three_months':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+3 months', 'UTC');
        break;

      case 'next_six_months':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+6 months', 'UTC');
        break;

      case 'next_year':
        $start_date = new DrupalDateTime('now', 'UTC');
        $end_date = new DrupalDateTime('+1 year', 'UTC');
        break;
    }

    $startDate = $dateTime::createFromFormat('Y-m-d\TH:i:s', $start_date->format('Y-m-d') . 'T00:00:00');
    $stopDate = $dateTime::createFromFormat('Y-m-d\TH:i:s', $end_date->format('Y-m-d') . 'T23:59:59');

    return [
      'start' => $startDate->format('U'),
      'stop' => $stopDate->format('U'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // If there were no results or no query object, we can't do anything.
    if (empty($this->results)) {
      return $this->facet;
    }

    $facet_results = [];
    foreach ($this->getOptions() as $key => $option) {
      if ($option) {
        $result_filter = $this->calculateResultFilter($option);
        $facet_results[$key] = new Result($this->facet, $result_filter['raw'], $result_filter['display'], 0);
      }
    }

    $this->facet->setResults($facet_results);
    return $this->facet;
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

    switch ($value) {
      case 'today':
        $display = $this->t('Today');
        break;

      case 'tomorrow':
        $display = $this->t('Tomorrow');
        break;

      case 'this_weekend':
        $display = $this->t('This weekend');
        break;

      case 'this_weekend_long':
        $display = $this->t('This long weekend');
        break;

      case 'next_seven_days':
        $display = $this->t('Next 7 days');
        break;

      case 'next_fourteen_days':
        $display = $this->t('Next 14 days');
        break;

      case 'next_thirty_days':
        $display = $this->t('Next 30 days');
        break;

      case 'next_three_months':
        $display = $this->t('Next 3 months');
        break;

      case 'next_six_months':
        $display = $this->t('Next 6 months');
        break;

      case 'next_year':
        $display = $this->t('Next year');
        break;
    }

    return [
      'display' => $display,
      'raw' => $value,
    ];
  }

  /**
   * Return the allowed values.
   *
   * @return array
   *   An array containing the allowed values.
   */
  protected function allowedValue(): array {
    return [
      'today',
      'tomorrow',
      'this_weekend',
      'this_weekend_long',
      'next_seven_days',
      'next_fourteen_days',
      'next_thirty_days',
      'next_three_months',
      'next_six_months',
      'next_year',
    ];
  }

  /**
   * Retrieve configuration: Filter default setting.
   *
   * @return bool
   *   The filter default setting for this config.
   */
  protected function getFilterDefault(): bool {
    return $this->getConfiguration()['filter_default'];
  }

  /**
   * Retrieve configuration: Options to display.
   *
   * @return string[]
   *   The options for this config.
   */
  protected function getOptions(): array {
    return $this->getConfiguration()['options'];
  }

}
