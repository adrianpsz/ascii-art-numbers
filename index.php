<?php

declare(strict_types=1);

use digits\digits_3x3\Digits_3x3;
use digits\digits_5x5\Digits_5x5;

include_once "loader.php";

includeAll('lib');

$display_3x3 = new Display(Digits_3x3::getDigits(),
    Digits_3x3::MAX_ROWS,
    Digits_3x3::MAX_COLS
);

$display_3x3->renderDigits('0123456789');
$display_3x3->renderDigits('9+6-3=12');

$display_5x5 = new Display(Digits_5x5::getDigits(),
    Digits_5x5::MAX_ROWS,
    Digits_5x5::MAX_COLS
);

$display_5x5->renderDigits('0123456789');
$display_5x5->renderDigits('3+6-5=4');
