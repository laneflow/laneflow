<?php


namespace Laneflow\Laneflow\Example\Lanes;


use Laneflow\Laneflow\Example\Responsible\ContractsResponsible;
use Laneflow\Laneflow\SwimLane\Lane\Lane;

class ContractsLane extends Lane
{
    public function __construct()
    {
        parent::__construct();
        $this->addResponsible(new ContractsResponsible());
    }

}