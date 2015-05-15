# Similar Text Finder
[![Packagist](https://img.shields.io/packagist/l/rap2hpoutre/similar-text-finder.svg)](https://packagist.org/packages/rap2hpoutre/similar-text-finder) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/?branch=master) 
[![Build Status](https://travis-ci.org/rap2hpoutre/similar-text-finder.svg?branch=master)](https://travis-ci.org/rap2hpoutre/similar-text-finder)
[![Code Coverage](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/rap2hpoutre/similar-text-finder/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/d02347d2-b307-471e-aeb5-2a31183f5d19/mini.png)](https://insight.sensiolabs.com/projects/d02347d2-b307-471e-aeb5-2a31183f5d19)
## TL;DR

Similar text finder. Install via composer, works with any framework: Laravel, Slim, Symfony, etc.

![screenshot](https://cloud.githubusercontent.com/assets/1575946/7246876/1b15c4c0-e803-11e4-91d8-a2e7cd5a0f0c.png)

```php
// Init Similar Text Finder with a needle and a haystack
$text_finder = new \SimilarText\Finder('bananna', ['apple', 'banana', 'kiwi']);

// Get first similar word (it's banana)
echo $text_finder->first();
```

## Installation
Install with composer
`composer require rap2hpoutre/similar-text-finder`
That's all.

You can now use it in your framework's controller, or wherever you want (you don't need a framework anyway).

## Usage
### Quick start
Just build a new Similar Text Finder like this:
```php
$tf = new \SimilarText\Finder($needle, $haystack);
```
`$needle` may be the user input and `$haystack` should be an array with all your suggestion. You can display the closest response like this:
```php
echo 'Did you mean ' $tf->first() . ' ?';
```
Or use it in your favorite template engine (Twig, Blade, etc.)

You can get all your suggestion ordered by most approching words like this:
```php
$all = $tf->all();
```

### Example in raw PHP
```php
use SimilarText\Finder;

// User input with a typo (you could get it from $_GET)
$needle = 'tmatoes';

// Your list (from your database or an API)
$haystack = ['salad', 'tomatoes', 'onions', 'mates'];

// Init Text Finder
$finder = new Finder($needle, $haystack);

// Display all results ordered by the most approching
$results = $finder->all();
echo implode(', ', $results);

// You should see something like "tomatoes, mates, onions, salad", yohoo.
```
