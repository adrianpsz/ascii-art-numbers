<?php

namespace digits\digits_3x3;

use digits\Digit;
use digits\DigitRow;

class Digit_3x3_4 extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', ' ', ' ']),
            new DigitRow(['|', '_', '|']),
            new DigitRow([' ', ' ', '|']),
        ];
    }
}