<?php

declare(strict_types=1);

namespace digits;

abstract class Digit
{
    public function __construct()
    {
    }

    /**
     * @return DigitRow[]
     */
    abstract public function render(): array;
}
