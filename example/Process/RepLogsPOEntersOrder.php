<?php


namespace Laneflow\Laneflow\Example\Process;


use Laneflow\Laneflow\SwimLane\Process\Process;

class RepLogsPOEntersOrder extends Process
{
    public function __construct($code = 'rep_logs_po_enters_order', $label = 'Rep Logs PO,<br>&nbsp;&nbsp;&nbsp;Enters Order')
    {
        parent::__construct($code, $label);
    }

}