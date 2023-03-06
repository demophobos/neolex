<?php

namespace Drupal\facets_autocomplete\Plugin\facets\widget;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\facets\FacetInterface;
use Drupal\facets\Result\ResultInterface;
use Drupal\facets\Widget\WidgetPluginBase;

/**
 * A widget that provides a textfield that autocomplets the facet results.
 *
 * @FacetsWidget(
 *   id = "autocomplete",
 *   label = @Translation("Textfield with autocomplete"),
 *   description= @Translation("A widget that provides an autocomplete."),
 * )
 */
class AutoCompleteWidget extends WidgetPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'show_reset_link' => FALSE,
      'hide_reset_when_no_selection' => FALSE,
      'reset_text' => $this->t('Reset'),
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $form = parent::buildConfigurationForm($form, $form_state, $facet);

    $form['show_reset_link'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show reset link'),
      '#default_value' => $this->getConfiguration()['show_reset_link'],
    ];
    $form['reset_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Reset text'),
      '#default_value' => $this->getConfiguration()['reset_text'],
      '#states' => [
        'visible' => [
          ':input[name="widget_config[show_reset_link]"]' => ['checked' => TRUE],
        ],
        'required' => [
          ':input[name="widget_config[show_reset_link]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['hide_reset_when_no_selection'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Hide reset link when no facet item is selected'),
      '#default_value' => $this->getConfiguration()['hide_reset_when_no_selection'],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet) {
//    $build = parent::build($facet);
//    $build['#attributes']['class'][] = 'js-facets-dropdown-links';
//    $build['#attached']['library'][] = 'facets/drupal.facets.dropdown-widget';

//    $build = [];
    /** @var \Drupal\facets\Result\Result[] $results */
    $results = $facet->getResults();
    $items = $autocomplete_values = $automplete_urls = [];

    $configuration = $facet->getWidget()['config'];
    $this->showNumbers = empty($configuration['show_numbers']) ? FALSE : (bool) $configuration['show_numbers'];

    foreach ($results as $result) {
      if (is_null($result->getUrl())) {
        // @TODO: figure out what this is and fill in.
        $text = $this->generateValues($result);
        $items[$facet->getFieldIdentifier()][] = $text;
      }
      else {
//        $items[$facet->getFieldIdentifier()][] = $this->buildListItems($facet, $result);
        $autocomplete_values[$result->getRawValue()] = $result->getDisplayValue() . ($this->showNumbers ? ' (' . $result->getCount() . ')' : '');
        $url = $result->getUrl()->toString();
        $automplete_urls[$result->getDisplayValue() . ($this->showNumbers ? ' (' . $result->getCount() . ')' : '')] = $url;
      }
    }

    // Get reset URL, if option is checked.
    $reset_url = '';
    if ($configuration['show_reset_link']
      && (!$configuration['hide_reset_when_no_selection'] || $facet->getActiveItems())
    ) {
      $urlProcessorManager = \Drupal::service('plugin.manager.facets.url_processor');
      $url_processor = $urlProcessorManager->createInstance($facet->getFacetSourceConfig()
        ->getUrlProcessorName(), ['facet' => $facet]);
      $request = \Drupal::request();
      $reset_url = Url::createFromRequest($request);
      $params = $request->query->all();
      unset($params[$url_processor->getFilterKey()]);
      $reset_url->setOption('query', $params);
      $reset_url = $reset_url->toString();
    }

    $active = $facet->getActiveItems();
    $default_value = '';
    if (isset($active[0])) {
      $default_value = $autocomplete_values[$active[0]] ?? '';
    }
    // Add librarys and everything to js.
    $build['#attached']['library'][] = 'facets_autocomplete/drupal.facets_autocomplete.autocomplete-widget';
    $build['#attached']['drupalSettings']['facets_autocomplete']['autocomplete_widget'][$facet->id()]['results'] = $autocomplete_values;
    $build['#attached']['drupalSettings']['facets_autocomplete']['autocomplete_widget'][$facet->id()]['urls'] = $automplete_urls;
    $build['#attached']['drupalSettings']['facets_autocomplete']['autocomplete_widget'][$facet->id()]['default_value'] = $default_value;
    $build['#attached']['drupalSettings']['facets_autocomplete']['autocomplete_widget'][$facet->id()]['reset_url'] = $reset_url;

    // @TODO: add default value here instead of in js.
    $build['autocomplete_' . $facet->id()] = [
      '#type' => 'textfield',
      '#title' => $this->t('@name autocomplete', [
        '@name' => $facet->label(),
      ]),
      '#title_display' => 'invisible',
      '#attributes' => [
        'class' => ['autocomplete-facet'],
        'data-id' => [$facet->id()],
        'id' => [$facet->id()],
      ],
      '#default_value' => $default_value,
      '#field_suffix' => $reset_url ? '<a id="' . $facet->id() . '-reset" href="' . $reset_url . '" class="autocomplete-items__reset" aria-label="' . $this->t('Reset option for @name', [
          '@name' => $facet->label(),
        ]) . '">' . $this->t($configuration['reset_text']) . '</a>' : '',
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function buildListItems(FacetInterface $facet, ResultInterface $result) {
    if ($children = $result->getChildren()) {
      $items = $this->prepare($result);

      $children_markup = [];
      foreach ($children as $child) {
        $children_markup[] = $this->buildChildren($child);
      }

      $items['children'] = [$children_markup];

    }
    else {
      $items = $this->prepare($result);
    }

    return $items;
  }

  /**
   * Prepares the URL and values for the facet.
   *
   * @param \Drupal\facets\Result\ResultInterface $result
   *   A result item.
   *
   * @return array
   *   The results.
   */
  protected function prepare(ResultInterface $result) {
    $values = $this->generateValues($result);

    if (is_null($result->getUrl())) {
      $facet_values = $values;
    }
    else {
      $facet_values['url'] = $result->getUrl()->setAbsolute()->toString();
      $facet_values['values'] = $values;
    }

    return $facet_values;
  }

  /**
   * Builds an array for children results.
   *
   * @param \Drupal\facets\Result\ResultInterface $child
   *   A result item.
   *
   * @return array
   *   An array with the results.
   */
  protected function buildChildren(ResultInterface $child) {
    $values = $this->generateValues($child);

    if (!is_null($child->getUrl())) {
      $facet_values['url'] = $child->getUrl()->setAbsolute()->toString();
      $facet_values['values'] = $values;
    }
    else {
      $facet_values = $values;
    }

    return $facet_values;
  }

  /**
   * Generates the value and the url.
   *
   * @param \Drupal\facets\Result\ResultInterface $result
   *   The result to extract the values.
   *
   * @return array
   *   The values.
   */
  protected function generateValues(ResultInterface $result) {
    $values['value'] = $result->getDisplayValue();

    if ($this->getConfiguration()['show_numbers'] && $result->getCount() !== FALSE) {
      $values['count'] = $result->getCount();
    }

    if ($result->isActive()) {
      $values['active'] = 'true';
    }

    return $values;
  }

}
