<?php
/**
 * @param $number
 * @param int $decimal
 * @return string
 */
function printThousandSeparator($number, $decimal = 0)
{
    return is_string($number) ? $number : number_format($number, $decimal);
}