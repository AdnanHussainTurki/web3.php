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
use AdnanHussainTurki\Web3\Formatters\QuantityFormatter;

class PostFormatter implements IFormatter
{
    /**
     * format
     *
     * @param mixed $value
     * @return string
     */
    public static function format($value)
    {
        if (isset($value['priority'])) {
            $value['priority'] = QuantityFormatter::format($value['priority']);
        }
        if (isset($value['ttl'])) {
            $value['ttl'] = QuantityFormatter::format($value['ttl']);
        }
        return $value;
    }
}
