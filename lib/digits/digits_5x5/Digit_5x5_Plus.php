<?php

namespace digits\digits_5x5;

use digits\Digit;
use digits\DigitRow;

class Digit_5x5_Plus extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
            new DigitRow([' ', ' ', '|', ' ', ' ']),
            new DigitRow([' ', '-', '+', '-', ' ']),
            new DigitRow([' ', ' ', '|', ' ', ' ']),
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
        ];
    }
}
