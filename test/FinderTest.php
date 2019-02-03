<?php namespace SimilarText\Test;

use SimilarText\Finder;
use PHPUnit\Framework\TestCase;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends TestCase
{
    /**
     * Test first() method
     */
    public function testFirst()
    {
        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'banana', 'orange', 'banner']);
        $this->assertEquals('banana', $text_finder->first());
    }

    /**
     * Test all() method
     */
    public function testAll()
    {
        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'Ü◘ö']);
        $this->assertCount(3, $text_finder->all());
    }

    /**
     * Test hasExactMatch() method
     */
    public function testHasExactMatch() {
        $text_finder = new Finder('banana', ['apple', 'kiwi', 'banana']);
        $this->assertTrue($text_finder->hasExactMatch());
    }

    /**
     * Test hasExactMatch() method
     */
    public function testHasNotExactMatch() {
        $text_finder = new Finder('banana', ['apple', 'kiwi']);
        $this->assertFalse($text_finder->hasExactMatch());
    }

    /**
     * Test threshold() method
     */
    public function testThreshold() {
        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'banana', 'orange', 'bandana', 'banana', 'canary']);
        $this->assertEquals(['banana', 'bandana', 'canary'], $text_finder->threshold(4)->all());

        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'banana', 'orange', 'bandana', 'banana', 'canary']);
        $this->assertEquals('banana', $text_finder->threshold(2)->first());

        $text_finder = new Finder('banana', ['apple', 'kiwi', 'banana', 'orange', 'bandana', 'banana', 'canary']);
        $this->assertEquals('banana', $text_finder->threshold(0)->first());

        $text_finder = new Finder('bananna', ['apple', 'kiwi', 'orange', 'melon']);
        $this->assertNull($text_finder->threshold(2)->first());
    }
}
