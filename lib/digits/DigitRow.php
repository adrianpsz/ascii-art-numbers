<?php

namespace digits;
class DigitRow
{
    /**
     * @param string[] $row
     */
    public function __construct(protected array $row)
    {
    }

    /**
     * @return string
     */
    public function renderRow(): string
    {
        return implode('', $this->row);
    }
}
