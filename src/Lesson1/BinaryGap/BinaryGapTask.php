<?php

namespace Yuma\Lesson1\BinaryGap;

use Yuma\Task;

class BinaryGapTask extends Task
{

    public function run()
    {
        $number = 1041;

        $binaryManager = new BinaryManager();
        $binaryString = $binaryManager->decimalToBinary($number);
        $gapCounter = new GapCounter();
        $gap = $gapCounter->calculateGap($binaryString);

        echo 'The binary gap for number ' . $number . ' (' . $binaryString . ') is: ' . $gap;
    }

    /**
     * @return string
     */
    public function taskUrl()
    {
        return 'https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/';
    }
}