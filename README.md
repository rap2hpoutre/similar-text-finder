# Similar Text Finder
[![Packagist](https://img.shields.io/packagist/l/rap2hpoutre/similar-text-finder.svg)](https://packagist.org/packages/rap2hpoutre/similar-text-finder) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/laravel-log-viewer/build-status/master) [![SensioLabs Insight](https://img.shields.io/sensiolabs/i/d02347d2-b307-471e-aeb5-2a31183f5d19.svg)]()
## TL;DR

Similar text finder. Install via composer, works with any framework: Laravel, Slim, Symfony, etc.

![screenshot](https://cloud.githubusercontent.com/assets/1575946/7246876/1b15c4c0-e803-11e4-91d8-a2e7cd5a0f0c.png)

```php
// Init Similar Text Finder with a needle and a haystack
$text_finder = new \SimilarText\Finder('bananna', ['apple', 'kiwi', 'banana', 'orange']);

// Get first similar word (it's banana)
echo $text_finder->first();
```
