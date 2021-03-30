<?php


namespace Laneflow\Laneflow\SwimLane;


use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\Collection;
use Laneflow\Laneflow\Graphic\StepsAsRowsRenderer;

class Steps extends Collection
{
    protected SwimLane$swimlane;
    protected StepsAsRowsRenderer $stepsAsRowsRenderer;

    public static function createBySwimlane(SwimLane$swimLane): Steps
    {
        $steps = new Steps();
        $renderer = new StepsAsRowsRenderer($swimLane);
        $steps->setStepsAsRowsRenderer($renderer);

        return $steps;
    }

    /**
     * @param SwimLane $swimlane
     * @return Steps
     */
    public function setSwimlane(SwimLane $swimlane): Steps
    {
        $this->swimlane = $swimlane;
        return $this;
    }

    #[Pure] public function __toString(): string
    {
        return (string)($this->getStepsAsRowsRenderer());
    }


    /**
     * @return SwimLane
     */
    public function getSwimlane(): SwimLane
    {
        return $this->swimlane;
    }

    /**
     * @param StepsAsRowsRenderer $stepsAsRowsRenderer
     * @return Steps
     */
    public function setStepsAsRowsRenderer(StepsAsRowsRenderer $stepsAsRowsRenderer): Steps
    {
        $this->stepsAsRowsRenderer = $stepsAsRowsRenderer;
        return $this;
    }

    /**
     * @return StepsAsRowsRenderer
     */
    public function getStepsAsRowsRenderer(): StepsAsRowsRenderer
    {
        return $this->stepsAsRowsRenderer;
    }
}