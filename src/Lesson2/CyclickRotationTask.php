<?php

namespace Yuma\Lesson2;

use Yuma\Task;

class CyclickRotationTask implements Task
{

    public function run()
    {
        // Input
        $arrayToRotate = [1, 2, 3, 4];
        $rotateCount = 1;

        $arrayRotator = new ArrayRotator();
        var_dump($arrayRotator->rotateArray($arrayToRotate, $rotateCount));
    }
}