<?php namespace SimilarText\Test;

use \SimilarText\Finder;

class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testFirst()
    {
        $text_finder = new Finder('bananna', ['apple','kiwi','banana','orange','banner']);
        $this->assertEquals('banana', $text_finder->first());
    }

    public function testAll()
    {
        $text_finder = new Finder('bananna', ['apple','kiwi','Ü◘ö']);
        $this->assertCount(3, $text_finder->all());
    }
}
