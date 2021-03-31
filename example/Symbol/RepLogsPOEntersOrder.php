<?php


namespace Laneflow\Laneflow\Example\Symbol;


use Laneflow\Laneflow\SwimLane\Symbol\Symbol;

class RepLogsPOEntersOrder extends Symbol
{
    public function __construct($code = 'rep_logs_po_enters_order', $label = 'Rep Logs PO,<br>&nbsp;&nbsp;&nbsp;Enters Order')
    {
        parent::__construct($code, $label);
    }

}