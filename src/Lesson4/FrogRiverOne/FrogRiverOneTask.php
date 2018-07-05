<?php

namespace Yuma\Lesson4\FrogRiverOne;

use Yuma\Task;

class FrogRiverOneTask extends Task
{

    public function taskUrl()
    {
        return 'https://app.codility.com/programmers/lessons/4-counting_elements/frog_river_one/';
    }

    public function run()
    {

        // position
        $x = 5;

        // falling leaves
        $a = [1, 3, 1, 4, 2, 3, 5, 4];

        $quickestTimeCalculator = new QuickestTimeCalculator();
        var_dump($quickestTimeCalculator->getTheQuickestTime($x, $a));;

    }
}