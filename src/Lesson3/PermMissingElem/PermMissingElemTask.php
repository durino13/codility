<?php

namespace Yuma\Lesson3\PermMissingElem;

use Yuma\Task;

class PermMissingElemTask extends Task
{

    /**
     * @return string
     */
    public function taskUrl(): string
    {
        return 'https://app.codility.com/programmers/lessons/3-time_complexity/perm_missing_elem/';
    }

    public function run()
    {

        $input = [ 2, 3, 1, 5, 4, 7, 8, 6, 10];

        $finder = new MissingElementFinder();
        var_dump($finder->findMissingElement($input));

    }

}