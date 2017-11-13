<?php

/**
 * @param array $items
 * @param callable $func
 * @return int|string
 * @throws DivisionByZeroError
 * @throws \OutCloud\Exception\Math\NotANumberException
 */
function array_avg_callable(array $items, callable $func)
{
    $sum = 0;
    foreach ($items as $item) {
        $value = $func($item);
        if (!is_numeric($value)) {
            throw new \OutCloud\Exception\Math\NotANumberException();
        }
        $sum += $value;
    }
    $count = \count($items);
    if ($count == 0) {
        throw new DivisionByZeroError();
    }

    return $sum;
}