<?php

namespace Yuma\Lesson2\Needle;

/**
 * Class NeedleFinder This class will read the maximum count of a predefined number
 */
class NeedleFinder
{

    /**
     * @var int The number, which we are going to try to locate in the hayshack
     */
    protected $needle;

    /**
     * @var array
     */
    protected $hayshack;

    /**
     * NeedleFinder constructor.
     * @param int $needle
     * @param array $hayshack The array, in which we are going to try to find a needle
     */
    public function __construct(array $hayshack)
    {
        $this->hayshack = $hayshack;
    }

    public function analyzeHayshack(int $needle)
    {
        return $this->analyze($needle);
    }

    /**
     * @return int Function returns the maximum stream count of a needle in the hayshack
     */
    protected function analyze(int $needle)
    {
        $rememberMaxOccurances = 0;
        $count = 0;
        foreach ($this->hayshack as $number) {
            if ($number === $needle) {
                $count++;
            } else {
                if ($rememberMaxOccurances <= $count) {
                    $rememberMaxOccurances = $count;
                }
                $count = 0;
            }
        }

        return $rememberMaxOccurances;
    }

}