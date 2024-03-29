<?php


namespace Soisy;


use Soisy\Exceptions\InvalidAmountException;
use Soisy\Exceptions\InvalidRatingException;

/**
 * Class Loan
 * @package Soisy
 */
class Loan
{
    /**
     * @var
     */
    private $amount;
    /**
     * @var
     */
    private $rating;

    /**
     * Investment constructor.
     * @param $amount
     * @param $rating
     * @throws InvalidAmountException
     * @throws InvalidRatingException
     */
    public function __construct($amount, $rating)
    {
        $this->setAmount($amount);
        $this->setRating($rating);
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $amount
     * @throws InvalidAmountException
     */
    public function setAmount($amount)
    {
        if ($amount <= 0) {
            throw new InvalidAmountException('Amount should be greater than zero');
        }
        $this->amount = $amount;
    }

    /**
     * @param mixed $rating
     * @throws InvalidRatingException
     */
    public function setRating($rating)
    {
        if ($rating <= 0) {
            throw new InvalidRatingException('Rating should be greater than zero');
        }
        $this->rating = $rating;
    }

}
