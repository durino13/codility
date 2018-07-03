<?php


namespace Yuma\Lesson1\BinaryGap;


class GapCounter
{

    public function calculateGap(string $binaryString)
    {
        // Find the first 1
        $maxGap = 0;
        $gapCounter = 0;
        $len = strlen($binaryString);
        for($i = 0; $i < $len; $i++ ) {
            if ($binaryString[$i] === '0') {
                $gapCounter++;
            } else {
                if ($maxGap < $gapCounter) {
                    $maxGap = $gapCounter;
                }
                $gapCounter = 0;
            }
        }

        return $maxGap;
    }

}