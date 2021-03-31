<?php


namespace Laneflow\Laneflow\Example\Symbol;


use Laneflow\Laneflow\SwimLane\Symbol\Symbol;

class CheckStandardTerms extends Symbol
{
    public function __construct($code = 'check_standard_terms', $label = 'Standard<br>&nbsp;&nbsp;&nbsp;Terms?')
    {
        parent::__construct($code, $label);
    }

}