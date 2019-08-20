<?php


namespace Soisy\Exceptions;

use Exception;
use Throwable;

/**
 * Interface InvalidRatingThrowable
 * @package Soisy\Exceptions
 */
interface InvalidRatingThrowable extends Throwable
{
}

/**
 * Class InvalidRatingException
 * @package Soisy\Exceptions
 */
class InvalidRatingException extends Exception implements InvalidRatingThrowable
{
}
