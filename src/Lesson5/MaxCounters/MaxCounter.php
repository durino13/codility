<?php


namespace Yuma\Lesson5\MaxCounters;


class MaxCounter
{

    protected $counters;

    public function execute($n, $a)
    {

        $this->a = $a;
        $this->counters = $this->initCounters($n);

        foreach ($a as $key => $item) {

            // determine the operation type
            if ($item <= $n) {
                $this->increaseCounters($this->counters, $item);
            } else {
                $this->maxCounters($this->counters);
            }

        }

        return $this->counters;

    }

    protected function increaseCounters(&$counters, $item)
    {
        $counters[$item-1] += 1;
    }

    protected function maxCounters(&$counters)
    {
        $max = $this->getMaximumCounter();
        $size = count($counters);
        for ($i = 0; $i < $size; $i++) {
            $counters[$i] = $max;
        }
    }

    /**
     * @param $n
     * @return array
     */
    protected function initCounters($n): array
    {
        $counters = [];
        // initialize counters
        for ($i = 0; $i < $n; $i++) {
            $counters[$i] = 0;
        }

        return $counters;
    }

    protected function getMaximumCounter()
    {
        $max = 0;
        foreach ($this->counters as $counter) {
            $max = ($max < $counter) ? $counter : $max;
        }
        return $max;
    }


}