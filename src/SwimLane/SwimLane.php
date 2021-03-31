<?php
namespace Laneflow\Laneflow\SwimLane;

use Laneflow\Laneflow\LaneFlow;
use Laneflow\Laneflow\SwimLane\Lane\Lane;
use Laneflow\Laneflow\SwimLane\Step\Step;

/**
 * Class SwimLane
 * A swimlane (or swimlane diagram) is used in process flow diagrams, or flowcharts,
 * that visually distinguishes job sharing and responsibilities for sub-processes of a business process.
 * Swimlanes may be arranged either horizontally or vertically.
 */
class SwimLane
{
    protected Lanes $lanes;
    protected Steps $steps;
    /**
     * @var LaneFlow
     */
    private LaneFlow $laneFlow;

    public function __construct(LaneFlow$laneFlow)
    {
        $lanes = new Lanes();
        $lanes->setSwimlane($this);
        $this->setLanes($lanes);
        $this->setLaneFlow($laneFlow);
        $steps = Steps::createBySwimlane($this);
        $this->setSteps($steps);
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

    public function addLane(Lane $lane): SwimLane
    {
        $this->getLanes()->put($lane->getCode(), $lane);

        return $this;
    }

    /**
     * @param Steps $steps
     * @return SwimLane
     */
    public function setSteps(Steps $steps): SwimLane
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * @return Steps
     */
    public function getSteps(): Steps
    {
        return $this->steps;
    }

    public function addStep(Step $step): SwimLane
    {
        $this
            ->getSteps()
            ->put($step->getCode(), $step)
        ;

        return $this;
    }
}
