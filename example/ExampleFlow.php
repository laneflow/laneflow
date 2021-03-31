<?php


namespace Laneflow\Laneflow\Example;


use Laneflow\Laneflow\Example\Lanes\ContractsLane;
use Laneflow\Laneflow\Example\Lanes\CustomerLane;
use Laneflow\Laneflow\Example\Lanes\SalesLane;
use Laneflow\Laneflow\Example\Process\ContractsAgentReviewsOrder;
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
        $contractsAgentReviewsOrder = new ContractsAgentReviewsOrder();

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
        $contractsLane = new ContractsLane();
        $contractsLane
            ->addProcess($contractsAgentReviewsOrder)
        ;

        //STEPS
        $stepCreateOrder = new StepCreateOrder();
        $stepCreateOrder
            ->addProcess($customerSubmitsPurchaseOrder)
            ->addProcess($repLogsPOEntersOrder)
            ->addProcess($contractsAgentReviewsOrder)
        ;

        $this
            ->getSwimLane()
            ->addLane($customerLane)
            ->addLane($salesLane)
            ->addLane($contractsLane)
            ->addStep($stepCreateOrder)
        ;
    }

}
