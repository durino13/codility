<?php

namespace Yuma;

use ReflectionClass;

abstract class Task
{

    abstract public function taskUrl();

    abstract public function run();

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function getTaskName(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

}