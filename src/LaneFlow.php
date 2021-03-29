<?php


namespace Laneflow\Laneflow;


use Laneflow\Laneflow\SwimLane\SwimLane;

class LaneFlow
{
    /**
     * @var SwimLane
     */
    protected $swimLane;
    public function __construct()
    {
        $this->setSwimLane(new SwimLane());
    }

    /**
     * @return SwimLane
     */
    public function getSwimLane()
    {
        return $this->swimLane;
    }

    /**
     * @param SwimLane $swimLane
     */
    public function setSwimLane($swimLane)
    {
        $this->swimLane = $swimLane;
    }

}