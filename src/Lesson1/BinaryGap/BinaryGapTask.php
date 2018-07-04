<?php

namespace Yuma\Lesson1\BinaryGap;

use Yuma\Task;

class BinaryGapTask implements Task
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

}