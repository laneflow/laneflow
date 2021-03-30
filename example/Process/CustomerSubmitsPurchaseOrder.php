<?php


namespace Laneflow\Laneflow\Example\Process;


use Laneflow\Laneflow\SwimLane\Process\Process;

class CustomerSubmitsPurchaseOrder extends Process
{
    public function __construct($code = 'customer_submits_po', $label = 'Customer submits PO')
    {
        parent::__construct($code, $label);
    }

}