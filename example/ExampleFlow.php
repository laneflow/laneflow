<?php


namespace Laneflow\Laneflow\Example;


use Laneflow\Laneflow\Example\Lanes\CustomerLane;
use Laneflow\Laneflow\Example\Lanes\SalesLane;
use Laneflow\Laneflow\Example\Process\CustomerSubmitsPurchaseOrder;
use Laneflow\Laneflow\Example\Process\EntersOrder;
use Laneflow\Laneflow\Example\Process\RepLogsPO;
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
        $repLogsPO = new RepLogsPO();
        $entersOrder = new EntersOrder();

        //LANES
        $customerLane = new CustomerLane();
        $customerLane
            ->addProcess($customerSubmitsPurchaseOrder)
        ;
        $salesLane = new SalesLane();
        $salesLane
            ->addProcess($repLogsPO)
            ->addProcess($entersOrder)
        ;

        //STEPS
        $stepCreateOrder = new StepCreateOrder();
        $customerSubmitsPurchaseOrder->setStep($stepCreateOrder);
        $repLogsPO->setStep($stepCreateOrder);
        $entersOrder->setStep($stepCreateOrder);

        $this
            ->getSwimLane()
            ->addLane($customerLane)
            ->addLane($salesLane)
            ->addStep($stepCreateOrder)
        ;
    }

}
