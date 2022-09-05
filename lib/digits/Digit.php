<?php

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
