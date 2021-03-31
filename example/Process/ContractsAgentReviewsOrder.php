<?php


namespace Laneflow\Laneflow\Example\Process;


use Laneflow\Laneflow\SwimLane\Process\Process;

class ContractsAgentReviewsOrder extends Process
{
    public function __construct($code = 'contracts_agent_reviews_order', $label = 'Contracts Agent<br>&nbsp;&nbsp;&nbsp;Reviews Order')
    {
        parent::__construct($code, $label);
    }

}