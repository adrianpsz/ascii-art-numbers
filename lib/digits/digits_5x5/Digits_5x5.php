<?php

namespace digits\digits_5x5;

class Digits_5x5
{
    public const MAX_ROWS = 5;
    public const MAX_COLS = 5;

    public static function getDigits(): array
    {
        return [
            '0' => new Digit_5x5_0(),
            '1' => new Digit_5x5_1(),
            '2' => new Digit_5x5_2(),
            '3' => new Digit_5x5_3(),
            '4' => new Digit_5x5_4(),
            '5' => new Digit_5x5_5(),
            '6' => new Digit_5x5_6(),
            '7' => new Digit_5x5_7(),
            '8' => new Digit_5x5_8(),
            '9' => new Digit_5x5_9(),
            '_' => new Digit_5x5__(),
            '+' => new Digit_5x5_Plus(),
            '-' => new Digit_5x5_Minus(),
            '=' => new Digit_5x5_Equal(),
        ];
    }
}
