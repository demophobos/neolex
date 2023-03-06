<?php

namespace Drupal\facets_date_range_picker\Plugin\facets\query_type;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\facets\QueryType\QueryTypeRangeBase;
use Drupal\search_api\Query\ConditionGroupInterface;
use Drupal\search_api\Query\QueryInterface;

/**
 * Provides the base class for the date (range) picker.
 */
class SearchApiDateRangePickerBase extends QueryTypeRangeBase {

  /**
   * The date processor config.
   *
   * @var array
   */
  protected $dateProcessorConfig;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, $processor_id) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $facet = $configuration['facet'];
    $processors = $facet->getProcessors();
    $this->dateProcessorConfig = $processors[$processor_id]->getConfiguration();

    $configuration = $this->getConfiguration();
    $configuration['start_date'] = $this->dateProcessorConfig['start_date'];
    $configuration['end_date'] = $this->dateProcessorConfig['end_date'];
    $configuration['overlap'] = $this->dateProcessorConfig['overlap'];
    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function calculateRange($value) {
    // TODO: Implement calculateRange() method.
  }

  /**
   * {@inheritdoc}
   */
  public function calculateResultFilter($value) {
    // TODO: Implement calculateResultFilter() method.
  }

  /**
   * Create the condition group for the active item.
   *
   * @todo Allow to exclude items.
   *
   * @param \Drupal\search_api\Query\QueryInterface $query
   *   The query.
   * @param \Drupal\search_api\Query\ConditionGroupInterface $filter
   *   The filter.
   * @param bool $exclude
   *   Whether or not to exclude the items.
   * @param string $active_item
   *   The active item.
   * @param string $field_identifier
   *   The field identifier.
   */
  protected function addConditionGroupsByActiveItem(QueryInterface &$query, ConditionGroupInterface &$filter, bool $exclude, string $active_item, string $field_identifier) {
    $end_date = $this->getEndDate();
    $range = $this->calculateRange($active_item);

    $item_filter = $query->createConditionGroup('AND', ['facet:' . $field_identifier]);
    $item_filter->addCondition($end_date, $range['start'], $exclude ? '<' : '>=');
    $item_filter->addCondition($end_date, $range['stop'], $exclude ? '>' : '<=');

    $filter->addConditionGroup($item_filter);
  }

  /**
   * Create the overlapping condition group for the active item.
   *
   * @todo Allow to exclude items.
   *
   * @param \Drupal\search_api\Query\QueryInterface $query
   *   The query.
   * @param \Drupal\search_api\Query\ConditionGroupInterface $filter
   *   The filter.
   * @param bool $exclude
   *   Whether or not to exclude the items.
   * @param string $active_item
   *   The active item.
   * @param string $field_identifier
   *   The field identifier.
   */
  protected function addConditionGroupsByActiveItemWithOverlap(QueryInterface &$query, ConditionGroupInterface &$filter, bool $exclude, string $active_item, string $field_identifier) {
    $start_date = $this->getStartDate();
    $end_date = $this->getEndDate();
    $range = $this->calculateRange($active_item);

    $item_filter = $query->createConditionGroup('OR', ['facet:' . $field_identifier]);

    // Events starting and stopping between range.
    $item_sub_filter_1 = $query->createConditionGroup('AND', ['facet:' . $field_identifier . '_1']);
    $item_sub_filter_1->addCondition($start_date, $range['start'], '>=');
    $item_sub_filter_1->addCondition($start_date, $range['stop'], '<=');
    $item_filter->addConditionGroup($item_sub_filter_1);

    // Events started before and stop between range.
    $item_sub_filter_2 = $query->createConditionGroup('AND', ['facet:' . $field_identifier . '_2']);
    $item_sub_filter_2->addCondition($start_date, $range['start'], '<=');
    $item_sub_filter_2->addCondition($end_date, $range['start'], '>=');
    $item_sub_filter_2->addCondition($end_date, $range['stop'], '<=');
    $item_filter->addConditionGroup($item_sub_filter_2);

    // Events started before and stop after range.
    $item_sub_filter_3 = $query->createConditionGroup('AND', ['facet:' . $field_identifier . '_3']);
    $item_sub_filter_3->addCondition($start_date, $range['start'], '<=');
    $item_sub_filter_3->addCondition($end_date, $range['stop'], '>=');
    $item_filter->addConditionGroup($item_sub_filter_3);

    $filter->addConditionGroup($item_filter);
  }

  /**
   * Calculate the default for a given facet filter value.
   *
   * Used when adding active items in self::execute() to $this->query to include
   * the range conditions for the value.
   *
   * @return array
   *   Keyed with 'start' value.
   */
  protected function calculateDefault(): array {
    $dateTime = new DrupalDateTime();
    $date = new DrupalDateTime('now');

    $startDate = $dateTime::createFromFormat('Y-m-d\TH:i:s', $date->format('Y-m-d\TH:i:s'));

    return [
      'start' => $startDate->format('U'),
    ];
  }

  /**
   * Retrieve configuration: Start date field setting.
   *
   * @return string
   *   The start date for this config.
   */
  protected function getStartDate(): string {
    return $this->getConfiguration()['start_date'];
  }

  /**
   * Retrieve configuration: End date field setting.
   *
   * @return string
   *   The end date for this config.
   */
  protected function getEndDate(): string {
    return $this->getConfiguration()['end_date'];
  }

  /**
   * Retrieve configuration: Overlap setting.
   *
   * @return bool
   *   The overlap setting for this config.
   */
  protected function getOverlap(): bool {
    return $this->getConfiguration()['overlap'];
  }

}
