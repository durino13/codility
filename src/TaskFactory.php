<?php


namespace Yuma;

use Exception;
use Yuma\Lesson2\Needle\NeedleTask;
use Yuma\Lesson1\BinaryGap\BinaryGapTask;


class TaskFactory
{

    /**
     *
     * Dynamically create a class instance
     *
     * @param string $taskName
     * @return BinaryGapTask|NeedleTask
     * @throws Exception
     */
    public function createTask(int $lesson, string $taskName)
    {
        $className = $this->getClassName($lesson, $taskName);

        if (class_exists($className)) {
            return new $className();
        }

        throw new Exception('Unknown task specified!');
    }

    /**
     * @param string $taskName
     * @return mixed
     */
    protected function getClassName(int $lesson, string $taskName)
    {
        $className = 'Yuma\Lesson' . $lesson . '\\' . $taskName . '\\' . $taskName . 'Task';
        return $className;
    }

}