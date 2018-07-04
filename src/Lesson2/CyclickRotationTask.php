<?php

namespace Yuma\Lesson2;

use Yuma\Task;

class CyclickRotationTask extends Task
{

    public function run()
    {
        // Input
        $arrayToRotate = [1, 2, 3, 4];
        $rotateCount = 1;

        $arrayRotator = new ArrayRotator();
        var_dump($arrayRotator->rotateArray($arrayToRotate, $rotateCount));
    }

    /**
     * @return string
     */
    public function taskUrl()
    {
        return 'https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/';
    }

}