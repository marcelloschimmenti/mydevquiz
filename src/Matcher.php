<?php


namespace Soisy;


class Matcher
{
    /**
     * @var array
     */
    private $investments;

    /**
     * @var array
     */
    private $loans;

    /**
     * @var array
     */
    private $matches;

    /**
     * Matcher constructor.
     */
    public function __construct()
    {
        $this->investments = array();
        $this->loans = array();
        $this->matches = array();
    }

    /**
     * @param $investment
     */
    public function addInvestment($investment)
    {
        array_push($this->investments, $investment);
    }

    /**
     * @param $loan
     */
    public function addLoan($loan)
    {
        array_push($this->loans, $loan);
    }

    /**
     * @param $loan
     * @param $investment
     */
    public function addMatch($loan, $investment)
    {
        array_push($this->matches, array(
            'loan' => $loan,
            'investment' => $investment
        ));
    }

    /**
     *
     */
    public function run()
    {
        foreach ($this->investments as $investment) {
            foreach ($this->loans as $loan) {
                if ($loan->getRating() == $investment->getRating() && $loan->getAmount() < $investment->getAmount()) {
                    array_push(
                        $this->matches,
                        array(
                            'loan' => $loan,
                            'investment' => $investment
                        )
                    );
                }
            }
        }
    }

    /**
     * @return mixed
     */
    public function getInvestments()
    {
        return $this->investments;
    }

    /**
     * @return mixed
     */
    public function getLoans()
    {
        return $this->loans;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

}
