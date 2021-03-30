<?php


namespace Laneflow\Laneflow\Example;


use Laneflow\Laneflow\Example\Lanes\CustomerLane;
use Laneflow\Laneflow\Example\Process\CustomerSubmitsPurchaseOrder;
use Laneflow\Laneflow\Example\Responsible\CustomerResponsible;
use Laneflow\Laneflow\LaneFlow;

/**
 * Class ExampleFlow
 * @package Laneflow\Laneflow\Example
 * Swimlane flowchart. Here, the swimlanes are named Customer, Sales, Contracts, Legal, and Fulfillment, and are arranged vertically.
 * https://en.wikipedia.org/wiki/Swim_lane#/media/File:Approvals.svg
 */
class ExampleFlow extends LaneFlow
{
    public function __construct()
    {
        parent::__construct();
        $customerLane = new CustomerLane();
        $customerLane
            ->addResponsible(new CustomerResponsible())
            ->addProcess(new CustomerSubmitsPurchaseOrder())
        ;
        $this
            ->getSwimLane()
            ->addLane($customerLane)
        ;
    }

}
