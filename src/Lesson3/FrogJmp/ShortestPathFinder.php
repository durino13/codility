<?php


namespace Yuma\Lesson3\FrogJmp;


class ShortestPathFinder
{

    public function findShortestPath(int $x, int $y, int $jump)
    {
        return  ((floor($y / $jump) * $jump + $x) < $y) ? floor($y / $jump) + 1 : floor($y / $jump);
    }
    
}