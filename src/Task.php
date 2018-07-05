<?php

namespace Yuma;

use ReflectionClass;

abstract class Task
{

    abstract public function assignmentUrl();
    abstract public function run();

    public function taskUrl(): string
    {
        return '?lesson=1&task=BinaryGap';
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function getTaskName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

}