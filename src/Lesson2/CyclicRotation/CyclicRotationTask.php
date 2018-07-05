<?php

namespace Yuma\Lesson2\CyclicRotation;

use Yuma\Task;

class CyclicRotationTask extends Task
{

    public function run()
    {
        // Input
        $arrayToRotate = [100, 2, 3, 4];
        $rotateCount = 5;

        $arrayRotator = new ArrayRotator();
        if (!$arrayRotator->validateArray($arrayToRotate)) {
            var_dump('Input array not valid');
            exit();
        }
        var_dump($arrayRotator->rotateArray($arrayToRotate, $rotateCount));
    }

    /**
     * @return string
     */
    public function assignmentUrl()
    {
        return 'https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/';
    }
}