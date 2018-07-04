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

// Print the URL
$codility = new Codility();
echo '<b>Task link:</b> <br><br>';
echo $codility->getUrl($task) . '<br><br>';

// Run the task and the lesson
echo '<b>Solution:</b> <br><br>';
$codility->createLesson()
    ->runTask($task);

