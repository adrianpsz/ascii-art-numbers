<?php

declare(strict_types=1);

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
