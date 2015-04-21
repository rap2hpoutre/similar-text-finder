# Similar Text Finder

## TL;DR
Similar text finder. Install via composer, works with any framework: Laravel, Slim, Symfony, etc.

```php
// Init Similar Text Finder with a needle and a haystack
$text_finder = new \SimilarText\Finder('bananna', ['apple', 'kiwi', 'banana', 'orange']);

// Get first similar word (it's banana)
echo $text_finder->first();
```
