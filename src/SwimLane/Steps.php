<?php


namespace Laneflow\Laneflow\SwimLane;


use Laneflow\Laneflow\Collection;

class Steps extends Collection
{
    protected SwimLane$swimlane;

    /**
     * @param SwimLane $swimlane
     * @return Steps
     */
    public function setSwimlane(SwimLane $swimlane): Steps
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