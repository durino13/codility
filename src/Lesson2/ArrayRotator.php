<?php


namespace Yuma\Lesson2;

// 31 minutes ..

class ArrayRotator
{

    /**
     * @param $arrayToRotate
     * @param $rotateCount
     * @return array
     */
    public function rotateArray(array $arrayToRotate, int $rotateCount): array
    {
        $rotatedArray = [];

        foreach ($arrayToRotate as $startIndex => $value) {
            $destinationIndex = $this->getDestinationIndex($arrayToRotate, $startIndex, $rotateCount);
            $rotatedArray[$destinationIndex] = $value;
        }

        // Now sort the array by the key
        $index = 0;
        $result = [];
        $arraySize = count($rotatedArray);
        for ($i = 0; $i < $arraySize; $i++) {
            foreach ($rotatedArray as $key => $value) {
                if ($key === $index) {
                    $result[$index] = $value;
                    $index++;
                }
            }
        }

        return $result;
    }

    /**
     *
     * Function computes the final index of a number
     *
     * @param int $startIndex
     * @param int $rotateCount
     * @return int
     */
    protected function getDestinationIndex(array $arrayToRotate, int $startIndex, int $rotateCount)
    {
        $destinationIndex = $startIndex + $rotateCount;
        $overflowCount = (int) ($destinationIndex / count($arrayToRotate));
        if ($destinationIndex > count($arrayToRotate) - 1) {
            $destinationIndex -= $overflowCount * count($arrayToRotate);
        }
        return $destinationIndex;
    }
    
}