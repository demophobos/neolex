(function ($, Drupal, drupalSettings) {
  'use strict';

  Drupal.customDatePicker = Drupal.customDatePicker || {};

  Drupal.behaviors.datepickerWidget = {
    attach: function (context, settings) {
      $(".form-item-date").once().hide();

      $(".form-item-when .form-select").on('change', function (e) {
        let item = $(this);
        console.log(item);
        if (item.val() === 'pick_date') {
          $(".form-item-date").show();
          $(".form-item-when").hide();
        }
      });

      Drupal.customDatePicker.processPicker(context);
    }
  }

  Drupal.customDatePicker.processPicker = function (context) {
    let widget = $('.facets-widget-facets_date_range_picker_datepicker');
    widget.addClass('js-facets-widget');

    $('.facets-widget-facets_date_range_picker_datepicker input[data-type=datepicker]')
      .once('facets-widget-datepicker-on-change')
      .on('change', function () {
        const $this = $(this);
        const facetId = $this.parents('.facets-widget-facets_date_range_picker_datepicker').find('ul').attr('data-drupal-facet-alias');
        let datePickerValue = $this.parents('.facets-widget-facets_date_range_picker_datepicker').find('input[data-type=datepicker]').val();
        let redirectUrl = decodeURIComponent(window.location.href);
        // Check if URL has parameters.
        let arr = redirectUrl.split('?');
        if (arr.length > 1 && arr[1] !== '') {
          let parameters = arr[1].split('&')
          let foundParameter = false;
          for (let i = 0; i < parameters.length; i++) {
            // Date was already set so replace previous filtering.
            if (parameters[i].includes(facetId+':')) {
              foundParameter = true
              if (datePickerValue) {
                let facetValueArray = parameters[i].split(':');
                facetValueArray[1] = datePickerValue;
                parameters[i] = facetValueArray.join(':');
              } else {
                parameters.splice(i, 1);
              }
            }
          }
          if (!foundParameter) {
            // Set new date parameter.
            let dateFilter = 'f[' + (parameters.length) + ']=' + facetId + ':' + datePickerValue;
            parameters.push(dateFilter)
          }
          let newParameters = parameters.join('&');
          window.location = arr[0] + '?' + newParameters;
        } else {
          window.location = redirectUrl + '?f[0]=' + facetId + ':' + datePickerValue;
        }
      });
  }
})(jQuery, Drupal, drupalSettings);
