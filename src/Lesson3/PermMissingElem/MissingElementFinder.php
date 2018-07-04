<?php


namespace Yuma\Lesson3\PermMissingElem;


class MissingElementFinder
{

    /**
     * @param $array
     * @return int|string
     */
    public function findMissingElement($array)
    {
        $max = $this->findMax($array);
        $helper = $this->createHelperArray($max);

        $size = count($array);
        for ($i = 0; $i < $size; $i++) {
            $helper[$array[$i]] = $array[$i];
        }

        foreach ($helper as $key => $item) {
            if ($item === 0) {
                return $key;
            }
        }
    }

    /**
     * Find the maximum item in an array
     * @param array $array
     * @return int|mixed
     */
    protected function findMax(array $array)
    {
        $max = 0;
        $arraySize = count($array);
        for ($i = 1; $i < $arraySize; $i++) {
            $max = ($max < $array[$i]) ? $array[$i] : $max;
        }
        return $max;
    }

    /**
     * @param $max
     * @param $helper
     * @return array
     */
    protected function createHelperArray($max): array
    {
        $helper = [];
        for ($i = 1; $i < $max; $i++) {
            $helper[$i] = 0;
        }
        return $helper;
    }


}