<?php


namespace Laneflow\Laneflow\Graphic;


use Laneflow\Laneflow\LaneFlow;

class Diagram
{
    /**
     * @var LaneFlow
     */
    private LaneFlow $laneFlow;

    public function __construct(LaneFlow$laneFlow)
    {
        $this->setLaneFlow($laneFlow);
    }

    public function __toString(): string
    {
        return "<canvas></canvas>";
    }

    /**
     * @param LaneFlow $laneFlow
     * @return Diagram
     */
    public function setLaneFlow(LaneFlow $laneFlow): Diagram
    {
        $this->laneFlow = $laneFlow;
        return $this;
    }

    /**
     * @return LaneFlow
     */
    public function getLaneFlow(): LaneFlow
    {
        return $this->laneFlow;
    }

}