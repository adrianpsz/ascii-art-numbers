<?php

namespace digits\digits_3x3;

use digits\Digit;
use digits\DigitRow;

class Digit_3x3_9 extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', '_', ' ']),
            new DigitRow(['|', '_', '|']),
            new DigitRow([' ', '_', '|']),
        ];
    }
}
