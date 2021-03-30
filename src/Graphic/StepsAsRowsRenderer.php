<?php


namespace Laneflow\Laneflow\Graphic;

use Laneflow\Laneflow\SwimLane\SwimLane;

class StepsAsRowsRenderer
{
    /**
     * @var SwimLane
     */
    private SwimLane $swimLane;

    public function __construct(SwimLane$swimLane)
    {
        $this->swimLane = $swimLane;
    }

    public function __toString(): string
    {
        return <<<HTML
    \$rows
HTML;
    }

    /**
     * @param SwimLane $swimLane
     * @return StepsAsRowsRenderer
     */
    public function setSwimLane(SwimLane $swimLane): StepsAsRowsRenderer
    {
        $this->swimLane = $swimLane;
        return $this;
    }

    /**
     * @return SwimLane
     */
    public function getSwimLane(): SwimLane
    {
        return $this->swimLane;
    }
}