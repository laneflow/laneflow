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
    /**
     * @var Lanes
     */
    protected Lanes $subLanes;

    public function __construct()
    {
        $this->setSubLanes(new Lanes());
    }

    /**
     * @return Lanes
     */
    public function getSubLanes(): Lanes
    {
        return $this->subLanes;
    }

    /**
     * @param Lanes $subLanes
     */
    public function setSubLanes(Lanes $subLanes)
    {
        $this->subLanes = $subLanes;
    }
}
