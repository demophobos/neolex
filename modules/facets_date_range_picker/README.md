# Facets Date Range Picker

## INTRODUCTION

The Facets Date Range Picker provides a widget for facets to pick a date range.
The following ranges are supported:

* Today
* Tomorrow
* This weekend
* Next 7 days
* Next 14 days
* Next 30 days

### DATEPICKER

A datepicker facet widget is also available.

## REQUIREMENTS

The module is tested with Search API and Search API Solr.

* [Search API](https://www.drupal.org/project/search_api)
* ([Search API Solr](https://www.drupal.org/project/search_api_solr))
* [Facets](https://www.drupal.org/project/facets)

This processor and query type expects the selected field to be indexed as
timestamp or this module will not work.

## INSTALLATION

* Install as you would normally install a contributed Drupal module. Visit
https://www.drupal.org/node/1897420 for further information.

## CONFIGURATION

* Add the date range field values to the search index
  * The start date range as a string (timestamp)
  * The end date range as a string (timestamp)
* Add a facet and enable the Date Range Picker
  * Select the start date field
  * Select the end date field
  * Choose the options you would like to have
    * Overlap (This lets you have items starting before the start date and
    stopping after the end date.)
    * Date range picker options
* Optionally add a reset link

## MAINTAINERS

Current maintainers:
* Tim Diels (tim-diels) - https://www.drupal.org/u/2915097

This project has been sponsored by:
* Calibrate - https://www.calibrate.be
