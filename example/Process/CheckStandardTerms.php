<?php


namespace Laneflow\Laneflow\Example\Process;


use Laneflow\Laneflow\SwimLane\Process\Process;

class CheckStandardTerms extends Process
{
    public function __construct($code = 'check_standard_terms', $label = 'Standard<br>&nbsp;&nbsp;&nbsp;Terms?')
    {
        parent::__construct($code, $label);
    }

}