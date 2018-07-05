<?php

namespace Yuma\Lesson5\MaxCounters;

use Yuma\Task;

class MaxCountersTask extends Task
{

    public function taskUrl()
    {
        return 'https://app.codility.com/programmers/lessons/4-counting_elements/max_counters/';
    }

    public function run()
    {
        $n = 5;
        $a = [ 3, 4, 4, 6, 1, 4, 4 ];

        $maxCounter = new MaxCounter();
        var_dump($maxCounter->execute($n, $a));
    }

}