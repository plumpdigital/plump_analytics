# Silverstripe Google Analytics module

Adds Google Analytics JS when the site is in live mode.

## Installation

Via composer:

`composer require plumpss/googleanalytics`

## Configuration

Add your Google Analytics account ID in `mysite/_config/config.yml`:

```yml
GoogleAnalyticsExtension:
  account_id: 'UA-XXXXXXXX-X'
```