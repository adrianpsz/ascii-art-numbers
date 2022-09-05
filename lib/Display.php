<?php

use digits\Digit;

class Display
{
    /**
     * @param Digit[] $digits
     */
    public function __construct(protected array $digits,
                                protected int   $maxRows,
                                protected int   $maxCols)
    {
    }

    /**
     * @param Digit[] $digits
     * @param int $maxRows
     * @param int $maxCols
     *
     * @return static
     */
    public static function from(array $digits, int $maxRows, int $maxCols): static
    {
        return new static($digits, $maxRows, $maxCols);
    }

    /**
     * @param string $digit
     * @param int $row
     *
     * @return string
     */
    protected function getDigitByRow(string $digit, int $row): string
    {
        if (
            array_key_exists($digit, $this->digits)
            && array_key_exists($row, $this->digits[$digit]->render())
        )
            return $this->digits[$digit]->render()[$row]->renderRow();

        return str_repeat(' ', $this->maxCols);
    }

    /**
     * @param string $numbers
     *
     * @return void
     */
    public function renderDigits(string $numbers): void
    {
        $output = '';

        for ($row = 0; $row < $this->maxCols; $row++) {
            foreach (mb_str_split($numbers) as $digit) {
                $output .= $this->getDigitByRow($digit, $row);
            }
            $output .= PHP_EOL;
        }

        echo $output;
    }
}
