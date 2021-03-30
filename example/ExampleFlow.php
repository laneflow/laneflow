<?php


namespace Laneflow\Laneflow\Example;


use Laneflow\Laneflow\Example\Lanes\CustomerLane;
use Laneflow\Laneflow\Example\Lanes\SalesLane;
use Laneflow\Laneflow\Example\Process\CustomerSubmitsPurchaseOrder;
use Laneflow\Laneflow\Example\Process\RepLogsPOEntersOrder;
use Laneflow\Laneflow\Example\Step\StepCreateOrder;
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
        //PROCESSES
        $customerSubmitsPurchaseOrder = new CustomerSubmitsPurchaseOrder();
        $repLogsPOEntersOrder = new RepLogsPOEntersOrder();

        //LANES
        $customerLane = new CustomerLane();
        $customerLane->setLabel('Customer');
        $customerLane
            ->addProcess($customerSubmitsPurchaseOrder)
        ;
        $salesLane = new SalesLane();
        $salesLane->setLabel('Sales');
        $salesLane
            ->addProcess($repLogsPOEntersOrder)
        ;

        //STEPS
        $stepCreateOrder = new StepCreateOrder();
        $stepCreateOrder
            ->addProcess($customerSubmitsPurchaseOrder)
            ->addProcess($repLogsPOEntersOrder)
        ;

        $this
            ->getSwimLane()
            ->addLane($customerLane)
            ->addLane($salesLane)
            ->addStep($stepCreateOrder)
        ;
    }

}
