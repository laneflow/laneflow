<?php


namespace Laneflow\Laneflow\SwimLane\Symbol;


use JetBrains\PhpStorm\Pure;

class Input extends Symbol
{
    #[Pure] public function __toString(): string
    {
        $label = $this->getLabel();

        return "<div style='  justify-content: center;  display: flex;    align-items: center;min-height: 28px;text-align:center;font-size: 12px; border: 1px solid black; padding: 6px 10px;  margin: 10px;	width: 100px;
	height: 50px;
	transform: skew(-10deg);'>$label</div>";
    }

}