<?php


namespace Yuma\Lesson2\CyclicRotation;

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
     * Array must be within range -1000..1000
     *
     * @param array $arrayToValidate
     * @return bool
     */
    public function validateArray(array $arrayToValidate): bool
    {
        foreach ($arrayToValidate as $item) {
            if ($item > 1000 || $item < -1000) {
                return false;
            }
        }
        return true;
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