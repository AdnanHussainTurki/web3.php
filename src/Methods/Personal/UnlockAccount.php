<?php

/**
 * This file is part of web3.php package.
 *
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 *
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace AdnanHussainTurki\Web3\Methods\Personal;

use InvalidArgumentException;
use AdnanHussainTurki\Web3\Methods\EthMethod;
use AdnanHussainTurki\Web3\Validators\AddressValidator;
use AdnanHussainTurki\Web3\Validators\StringValidator;
use AdnanHussainTurki\Web3\Validators\QuantityValidator;
use AdnanHussainTurki\Web3\Formatters\AddressFormatter;
use AdnanHussainTurki\Web3\Formatters\StringFormatter;
use AdnanHussainTurki\Web3\Formatters\NumberFormatter;

class UnlockAccount extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        AddressValidator::class, StringValidator::class, QuantityValidator::class
    ];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [
        AddressFormatter::class, StringFormatter::class, NumberFormatter::class
    ];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [
        2 => 300
    ];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}
