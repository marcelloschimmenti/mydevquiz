<?php


namespace Soisy\Exceptions;

use Exception;
use Throwable;

/**
 * Interface InvalidAmountThrowable
 * @package Soisy\Exceptions
 */
interface InvalidAmountThrowable extends Throwable
{
}

/**
 * Class InvalidAmountException
 * @package Soisy\Exceptions
 */
class InvalidAmountException extends Exception implements InvalidAmountThrowable
{
}
