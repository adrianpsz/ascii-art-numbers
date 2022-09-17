<?php

declare(strict_types=1);

namespace digits\digits_5x5;

use digits\Digit;
use digits\DigitRow;

class Digit_5x5_Minus extends Digit
{
    /**
     * @return DigitRow[]
     */
    public function render(): array
    {
        return [
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
            new DigitRow([' ', '-', '-', '-', ' ']),
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
            new DigitRow([' ', ' ', ' ', ' ', ' ']),
        ];
    }
}
