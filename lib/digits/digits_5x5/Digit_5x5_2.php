<?php

namespace digits\digits_5x5;

use digits\Digit;
use digits\DigitRow;

class Digit_5x5_2 extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', '_', '_', '_', ' ']),
            new DigitRow([' ', ' ', ' ', ' ', '|']),
            new DigitRow([' ', '_', '_', '_', '|']),
            new DigitRow(['|', ' ', ' ', ' ', ' ']),
            new DigitRow(['|', '_', '_', '_', ' ']),
        ];
    }
}
