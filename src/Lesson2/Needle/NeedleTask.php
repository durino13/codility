<?php

namespace Yuma\Lesson2\Needle;

use Yuma\Task;

class NeedleTask implements Task
{

    public function run()
    {

        $hayShack = [ 1, 2, 8, 8, 0, 5, 0, 0, 6, 0, 0, 0, 0, 7, 5 ];
        $streamReader = new NeedleFinder($hayShack);

        $found = $streamReader->analyzeHayshack(0);
        echo 'The needle 0 has been found ' . $found . ' times in the hayshack. </br>';

        $found = $streamReader->analyzeHayshack(5);
        echo 'The needle 5 has been found ' . $found . ' times in the hayshack. </br>';

        $found = $streamReader->analyzeHayshack(8);
        echo 'The needle 8 has been found ' . $found . ' times in the hayshack. </br>';

    }
}