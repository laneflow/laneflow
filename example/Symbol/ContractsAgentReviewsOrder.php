<?php


namespace Laneflow\Laneflow\Example\Symbol;


use Laneflow\Laneflow\SwimLane\Symbol\Symbol;

class ContractsAgentReviewsOrder extends Symbol
{
    public function __construct($code = 'contracts_agent_reviews_order', $label = 'Contracts Agent<br>&nbsp;&nbsp;&nbsp;Reviews Order')
    {
        parent::__construct($code, $label);
    }

}