<?php

namespace Yuma\Lesson1\BinaryGap;

/**
 * Class BinaryManager
 * @package Yuma\Lesson1\BinaryGap
 */
class BinaryManager
{

    /**
     * This functions converts an integer to a binary representation
     * @param int $number
     * @return string
     */
    public function decimalToBinary(int $number): string
    {
        $binaryString = '';

        while ($number > 0) {
            list($number, $modulo) = $this->divide($number);
            $binaryString .= $modulo;
        }

        return strrev($binaryString);
    }

    /**
     * @param int $number
     * @return array
     */
    protected function divide(int $number): array
    {
        $modulo = $number % 2;
        $number = (int) ($number / 2);
        return array($number, $modulo);
    }

}