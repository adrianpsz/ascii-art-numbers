<?php

declare(strict_types=1);

namespace digits\digits_3x3;

use digits\Digit;
use digits\DigitRow;

class Digit_3x3_Plus extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', ' ', ' ']),
            new DigitRow([' ', '+', ' ']),
            new DigitRow([' ', ' ', ' ']),
        ];
    }
}
