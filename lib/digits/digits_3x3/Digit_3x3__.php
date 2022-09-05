<?php

namespace digits\digits_3x3;

use digits\Digit;
use digits\DigitRow;

class Digit_3x3__ extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', ' ', ' ']),
            new DigitRow([' ', ' ', ' ']),
            new DigitRow(['_', '_', '_']),
        ];
    }
}