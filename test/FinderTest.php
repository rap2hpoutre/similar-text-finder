<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test first() method
     */
    public function testFirst()
    {
        $text_finder = new Finder('bananna', ['apple','kiwi','banana','orange','banner']);
        $this->assertEquals('banana', $text_finder->first());
    }

    /**
     * Test all() method
     */
    public function testAll()
    {
        $text_finder = new Finder('bananna', ['apple','kiwi','Ü◘ö']);
        $this->assertCount(3, $text_finder->all());
    }
}
