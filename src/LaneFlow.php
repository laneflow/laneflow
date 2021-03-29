<?php


namespace Laneflow\Laneflow;


use Laneflow\Laneflow\SwimLane\SwimLane;

class LaneFlow
{
    protected SwimLane $swimLane;
    public function __construct()
    {
        $this->setSwimLane(new SwimLane());
    }

    public function getSwimLane(): SwimLane
    {
        return $this->swimLane;
    }

    public function setSwimLane(SwimLane $swimLane)
    {
        $this->swimLane = $swimLane;
    }

}