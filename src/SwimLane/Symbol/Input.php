<?php


namespace Laneflow\Laneflow\SwimLane\Symbol;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\Contracts\RoutingContract;
use Route;

abstract class Input extends Symbol implements RoutingContract
{
    #[Pure] public function __toString(): string
    {
        $label = $this->getLabel();

        return "<div style='  justify-content: center;  display: flex;    align-items: center;min-height: 28px;text-align:center;font-size: 12px; border: 1px solid black; padding: 6px 10px;  margin: 10px;	width: 100px;
	height: 50px;
	transform: skew(-10deg);'>$label</div>";
    }

    public function addRoutes()
    {
        $uri = $this->getBaseUri();
        Route::get($uri, [static::class, 'create'])->name($uri);
    }

    abstract public function create(): Factory|View|Application;
}