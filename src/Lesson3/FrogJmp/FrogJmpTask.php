<?php

namespace Yuma\Lesson3\FrogJmp;

use Yuma\Task;

class FrogJmpTask extends Task
{

    public function taskUrl()
    {
        return 'https://app.codility.com/programmers/lessons/3-time_complexity/frog_jmp/';
    }

    public function run()
    {

        $x = 10;
        $y = 71;
        $jump = 30;

        $finder = new ShortestPathFinder();
        var_dump($finder->findShortestPath($x, $y, $jump));
    }
}