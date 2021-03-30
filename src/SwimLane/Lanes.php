<?php


namespace Laneflow\Laneflow\SwimLane;


use Laneflow\Laneflow\Collection;

class Lanes extends Collection
{

    protected SwimLane $swimlane;
    /**
     * @param SwimLane $swimlane
     * @return Lanes
     */
    public function setSwimlane(SwimLane $swimlane): Lanes
    {
        $this->swimlane = $swimlane;
        return $this;
    }

    /**
     * @return SwimLane
     */
    public function getSwimlane(): SwimLane
    {
        return $this->swimlane;
    }
}
