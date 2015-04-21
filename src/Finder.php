<?php namespace SimilarText;


/**
 * Class Finder
 * @package SimilarText
 *
 * Thanks to: http://php.net/manual/fr/function.levenshtein.php#113702
 */
class Finder
{

    /**
     * @var string Needle
     */
    private $needle;

    /**
     * @var array Haystack
     */
    private $haystack;

    /**
     * @var array Haystack
     */
    private $sorted_haystack;

    /**
     * @param $needle
     * @param $haystack
     */
    public function __construct($needle, $haystack)
    {
        $this->needle = $needle;
        $this->haystack = $haystack;
    }

    /**
     * Sort Haystack
     */
    private function sortHaystack()
    {
        $sorted_haystack = [];
        foreach ($this->haystack as $string) {
            $sorted_haystack[$string] = $this->levenshteinUtf8($this->needle, $string);
        }
        asort($sorted_haystack);

        $this->sorted_haystack = $sorted_haystack;
    }

    /**
     * @return mixed
     */
    public function first()
    {
        $this->sortHaystack();
        reset($this->sorted_haystack);
        return key($this->sorted_haystack);
    }

    /**
     * @return array
     */
    public function all()
    {
        $this->sortHaystack();
        return array_keys($this->sorted_haystack);
    }

    /**
     * @param $str
     * @param $map
     * @return string
     */
    private function utf8ToExtendedAscii($str, &$map)
    {
        // find all multi-byte characters (cf. utf-8 encoding specs)
        $matches = array();
        if (!preg_match_all('/[\xC0-\xF7][\x80-\xBF]+/', $str, $matches))
            return $str; // plain ascii string

        // update the encoding map with the characters not already met
        foreach ($matches[0] as $mbc)
            if (!isset($map[$mbc]))
                $map[$mbc] = chr(128 + count($map));

        // finally remap non-ascii characters
        return strtr($str, $map);
    }

    /**
     * @param $s1
     * @param $s2
     * @return int
     */
    private function levenshteinUtf8($s1, $s2)
    {
        $charMap = array();
        $s1 = $this->utf8ToExtendedAscii($s1, $charMap);
        $s2 = $this->utf8ToExtendedAscii($s2, $charMap);

        return levenshtein($s1, $s2);
    }
}
