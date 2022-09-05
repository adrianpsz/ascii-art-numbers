<?php

namespace digits\digits_3x3;

class Digits_3x3
{
    public const MAX_ROWS = 3;
    public const MAX_COLS = 3;

    public static function getDigits(): array
    {
        return [
            '0' => new Digit_3x3_0(),
            '1' => new Digit_3x3_1(),
            '2' => new Digit_3x3_2(),
            '3' => new Digit_3x3_3(),
            '4' => new Digit_3x3_4(),
            '5' => new Digit_3x3_5(),
            '6' => new Digit_3x3_6(),
            '7' => new Digit_3x3_7(),
            '8' => new Digit_3x3_8(),
            '9' => new Digit_3x3_9(),
            '_' => new Digit_3x3__(),
            '+' => new Digit_3x3_Plus(),
            '-' => new Digit_3x3_Minus(),
            '=' => new Digit_3x3_Equal(),
        ];
    }
}
