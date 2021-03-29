<?php
namespace Laneflow\Laneflow\SwimLane;

/**
 * Class SwimLane
 * A swimlane (or swimlane diagram) is used in process flow diagrams, or flowcharts,
 * that visually distinguishes job sharing and responsibilities for sub-processes of a business process.
 * Swimlanes may be arranged either horizontally or vertically.
 */
class SwimLane
{
    protected Lanes $lanes;
    public function __construct()
    {
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
}
