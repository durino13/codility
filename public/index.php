<?php

// Get the lesson
use Yuma\Codility;
use Yuma\TaskFactory;

// Register autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load the lesson and the task
$taskName = $_GET['task'];

// Load task
$taskFactory = new TaskFactory();
$task = $taskFactory->createTask($taskName);

// Run the task and the lesson
(new Codility())
    ->createLesson()
    ->runTask($task);

