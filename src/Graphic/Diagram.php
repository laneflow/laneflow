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
        return <<<HTML
<div id="app"></div>
<script >
const canvas = document.createElement('canvas');
canvas.id = 'canvas';
document.getElementById('app').appendChild(canvas);
const ctx = canvas.getContext('2d');
ctx.fillStyle = 'green';
ctx.fillRect(10, 10, 150, 100);
</script>
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