<?php


namespace Yuma;


use Exception;
use Yuma\Lesson1\BinaryGap\BinaryGapTask;
use Yuma\Lesson2\Needle\NeedleTask;

class TaskFactory
{

    /**
     * @param string $taskName
     * @return BinaryGapTask|NeedleTask
     * @throws Exception
     */
    public function createTask(string $taskName)
    {
        if ($taskName === 'BinaryGapTask') {
            return new BinaryGapTask();
        }

        if ($taskName === 'NeedleTask') {
            return new NeedleTask();
        }

        throw new Exception('Unknown task specified!');
    }

}