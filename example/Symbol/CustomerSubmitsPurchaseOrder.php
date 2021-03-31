<?php


namespace Laneflow\Laneflow\Example\Symbol;


use Laneflow\Laneflow\SwimLane\Symbol\Symbol;

class CustomerSubmitsPurchaseOrder extends Symbol
{
    public function __construct($code = 'customer_submits_po', $label = 'Customer submits PO')
    {
        parent::__construct($code, $label);
    }

}