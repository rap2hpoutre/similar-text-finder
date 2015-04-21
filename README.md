# Similar Text Finder

![screenshot](https://cloud.githubusercontent.com/assets/1575946/7246876/1b15c4c0-e803-11e4-91d8-a2e7cd5a0f0c.png)
## TL;DR
Similar text finder. Install via composer, works with any framework: Laravel, Slim, Symfony, etc.

```php
// Init Similar Text Finder with a needle and a haystack
$text_finder = new \SimilarText\Finder('bananna', ['apple', 'kiwi', 'banana', 'orange']);

// Get first similar word (it's banana)
echo $text_finder->first();
```
