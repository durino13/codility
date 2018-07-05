<?php


namespace Yuma\Lesson4\FrogRiverOne;


class QuickestTimeCalculator
{

    public function getTheQuickestTime(int $x, array $a): int
    {
        $filledPositions = [];

        // prefill the positions
        for ($i = 1; $i <= $x; $i++) {
            $filledPositions[$i] = 0;
        }

        foreach ($a as $second => $leaveFallen) {
            if ($leaveFallen <= $x) {
                $filledPositions[$leaveFallen] = 1;
            }

            $count = 0;
            // check, if we have all possitions filled
            foreach ($filledPositions as $filledPosition) {
                if ($filledPosition === 1 && $filledPosition <= $x) {
                    $count++;
                } else {
                    break;
                }
            }

            if ($count === $x) {
                return $second;
            }
        }

        return -1;
    }

}