<?php

/**
 * This file is part of web3.php package.
 *
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 *
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace AdnanHussainTurki\Web3\Methods\Eth;

use InvalidArgumentException;
use AdnanHussainTurki\Web3\Methods\EthMethod;
use AdnanHussainTurki\Web3\Validators\NonceValidator;
use AdnanHussainTurki\Web3\Validators\BlockHashValidator;
use AdnanHussainTurki\Web3\Formatters\QuantityFormatter;

class SubmitWork extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        NonceValidator::class, BlockHashValidator::class, BlockHashValidator::class
    ];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [
        QuantityFormatter::class
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
    protected $defaultValues = [];

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
