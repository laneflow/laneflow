<?php


namespace Laneflow\Laneflow\Example;


use Laneflow\Laneflow\Example\Lanes\CustomerLane;
use Laneflow\Laneflow\LaneFlow;

class ExampleFlow extends LaneFlow
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->getSwimLane()
            ->getSubLanes()
            ->add(new CustomerLane());
    }

}
