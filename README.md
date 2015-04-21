# Similar Text Finder

## TL;DR
Similar text finder. Install via composer, works with any framework: Laravel, Slim, Symfony, etc.

```php
// Init text Finder
$text_finder = new \SimilarText\Finder('bananna', ['apple', 'kiwi', 'banana', 'orange']);

// 
echo $text_finder->first();
```
