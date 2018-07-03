<?php

namespace Yuma;

use Yuma\Lesson;

class Codility
{

    /**
     * @return Lesson
     */
    public function createLesson(): Lesson
    {
        return new Lesson();
    }

}