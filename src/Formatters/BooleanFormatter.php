<?php

/**
 * This file is part of web3.php package.
 *
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 *
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace AdnanHussainTurki\Web3\Formatters;

use InvalidArgumentException;
use AdnanHussainTurki\Web3\Utils;
use AdnanHussainTurki\Web3\Formatters\IFormatter;

class BooleanFormatter implements IFormatter
{
    /**
     * format
     *
     * @param mixed $value
     * @return bool
     */
    public static function format($value)
    {
        return (bool) $value;
    }
}
