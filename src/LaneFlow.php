<?php


namespace Laneflow\Laneflow;


use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\Contracts\RoutingContract;
use Laneflow\Laneflow\Graphic\Diagram;
use Laneflow\Laneflow\SwimLane\Lane\Lane;
use Laneflow\Laneflow\SwimLane\SwimLane;

class LaneFlow
{
    protected SwimLane $swimLane;
    protected Diagram $diagram;
    public function __construct()
    {
        $this->setSwimLane(new SwimLane($this));
        $this->setDiagram(new Diagram($this));
    }

    #[Pure] public function __toString(): string
    {
        return (string)($this->getDiagram());
    }


    public function getSwimLane(): SwimLane
    {
        return $this->swimLane;
    }

    public function setSwimLane(SwimLane $swimLane)
    {
        $this->swimLane = $swimLane;
    }

    /**
     * @param Diagram $diagram
     * @return LaneFlow
     */
    public function setDiagram(Diagram $diagram): LaneFlow
    {
        $this->diagram = $diagram;
        return $this;
    }

    /**
     * @return Diagram
     */
    public function getDiagram(): Diagram
    {
        return $this->diagram;
    }

    public function addRoutes()
    {
        $routableSymbols = $this
            ->getSwimLane()
            ->getLanes()
            ->map(function (Lane $lane) {
                return $lane->getSymbols();
            })
            ->flatten()
            ->filter(function ($symbol) {
                return $symbol instanceof RoutingContract;
            });
        $routableSymbols
            ->each(function (RoutingContract $routingContract) {
                $routingContract->registerRoutes();
            });
    }
}