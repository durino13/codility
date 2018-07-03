<?php

namespace Yuma;

class Lesson
{

    /**
     * @param Task $task
     */
    public function runTask(Task $task)
    {
        $task->run();
    }

}