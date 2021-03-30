<?php


namespace Laneflow\Laneflow\Example\Lanes;


use Laneflow\Laneflow\Example\Responsible\CustomerResponsible;
use Laneflow\Laneflow\SwimLane\Lane\Lane;

class CustomerLane extends Lane
{
    public function __construct()
    {
        parent::__construct();
        $this->addResponsible(new CustomerResponsible());
    }

}