<?php


namespace Laneflow\Laneflow\Graphic;


use JetBrains\PhpStorm\Pure;
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

    #[Pure] public function __toString(): string
    {
        $steps = (string)($this
            ->getLaneFlow()
            ->getSwimLane()
            ->getSteps());
        return <<<HTML
<table>
$steps
</table>
HTML;
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