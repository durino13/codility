<?php


namespace Yuma;


class TableOfContents
{

    protected static $toc = [
        [
            'lesson' => '1',
            'task' => 'BinaryGap'
        ],
        [
            'lesson' => '2',
            'task' => 'CyclicRotation'
        ],
        [
            'lesson' => '3',
            'task' => 'FrogJmp'
        ],
        [
            'lesson' => '3',
            'task' => 'PermMissingElem'
        ],
        [
            'lesson' => '4',
            'task' => 'FrogRiverOne'
        ],
        [
            'lesson' => '5',
            'task' => 'MaxCounters'
        ]
    ];

    public static function printToc()
    {
        echo '<ul>';
        foreach (self::$toc as $item) {
            $taskFactory = new TaskFactory();
            $task = $taskFactory->createTask($item['lesson'], $item['task']);
            echo '<li><a href="' . $task->taskUrl() . '">' . $task->getTaskName() . '</a></li>';
        }
        echo '</ul>';
    }

}