<?php
namespace Laneflow\Laneflow\SwimLane;

use Laneflow\Laneflow\LaneFlow;

/**
 * Class SwimLane
 * A swimlane (or swimlane diagram) is used in process flow diagrams, or flowcharts,
 * that visually distinguishes job sharing and responsibilities for sub-processes of a business process.
 * Swimlanes may be arranged either horizontally or vertically.
 */
class SwimLane
{
    protected Lanes $lanes;
    /**
     * @var LaneFlow
     */
    private LaneFlow $laneFlow;

    public function __construct(LaneFlow$laneFlow)
    {
        $this->setLanes(new Lanes());
        $this->setLaneFlow($laneFlow);
    }

    /**
     * @return Lanes
     */
    public function getLanes(): Lanes
    {
        return $this->lanes;
    }

    /**
     * @param Lanes $lanes
     * @return SwimLane
     */
    public function setLanes(Lanes $lanes): SwimLane
    {
        $this->lanes = $lanes;

        return $this;
    }

    /**
     * @param LaneFlow $laneFlow
     * @return SwimLane
     */
    public function setLaneFlow(LaneFlow $laneFlow): SwimLane
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
