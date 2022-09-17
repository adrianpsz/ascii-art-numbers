<?php

declare(strict_types=1);

namespace digits\digits_3x3;

use digits\Digit;
use digits\DigitRow;

class Digit_3x3_0 extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', '_', ' ']),
            new DigitRow(['|', ' ', '|']),
            new DigitRow(['|', '_', '|']),
        ];
    }
}
