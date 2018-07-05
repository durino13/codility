<?php

namespace Yuma;

class Codility
{

    /**
     * @param Task $task
     * @return Lesson
     */
    public function createLesson(): Lesson
    {
        return new Lesson();
    }

    public function getUrl(Task $task): string
    {
        return '<a href="' . $task->assignmentUrl() . '">' . $task->getTaskName() . '</a>';
    }

}