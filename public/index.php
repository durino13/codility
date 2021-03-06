<?php

// Get the lesson
use Yuma\Codility;
use Yuma\TableOfContents;
use Yuma\TaskFactory;

// Register autoloader
require_once __DIR__ . '/../vendor/autoload.php';

if (isset($_GET['lesson']) && isset($_GET['task'])) {
    // Load the lesson and the task
    $lesson = $_GET['lesson'];
    $taskName = $_GET['task'];

    // Load task
    $taskFactory = new TaskFactory();
    $task = $taskFactory->createTask($lesson, $taskName);

    // Print the URL
    $codility = new Codility();
    echo '<b>Task link:</b> <br><br>';
    echo $codility->getUrl($task) . '<br><br>';

    // Run the task and the lesson
    echo '<b>Solution:</b> <br><br>';
    $codility->createLesson()
        ->runTask($task);
} else {
    TableOfContents::printToc();
}