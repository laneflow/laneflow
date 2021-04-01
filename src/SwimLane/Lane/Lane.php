<?php


namespace Laneflow\Laneflow\SwimLane\Lane;


use Illuminate\Support\Str;
use Laneflow\Laneflow\SwimLane\Symbol\Symbol;
use Laneflow\Laneflow\SwimLane\Symbols;
use Laneflow\Laneflow\SwimLane\Responsible\Responsible;
use Laneflow\Laneflow\SwimLane\Responsibles;
use ReflectionClass;

class Lane
{
    protected string $code;
    protected string $label;

    protected Symbols $symbols;
    protected Responsibles $responsibles;

    public function addResponsible(Responsible$responsible): Lane
    {
        $this->getResponsibles()
            ->put($responsible->getCode(), $responsible);

        return $this;
    }

    public function addSymbol(Symbol$symbol): Lane
    {
        $this->getSymbols()->put($symbol->getCode(), $symbol);

        return $this;
    }

    public function __construct($code = null, $label = null)
    {
        $this->setSymbols(new Symbols());
        $this->setResponsibles(new Responsibles());
        $reflect = new ReflectionClass($this);
        $shortName = $reflect->getShortName();

        if(empty($code)) {
            $code = Str::snake($shortName);
        }
        $this->setCode($code);

        if(empty($label)) {
            $label = Str::title($shortName);
        }
        $this->setLabel($label);

    }

    /**
     * @param string $label
     * @return Lane
     */
    public function setLabel(string $label): Lane
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param Symbols $symbols
     * @return Lane
     */
    public function setSymbols(Symbols $symbols): Lane
    {
        $this->symbols = $symbols;
        return $this;
    }

    /**
     * @return Symbols
     */
    public function getSymbols(): Symbols
    {
        return $this->symbols;
    }

    /**
     * @param Responsibles $responsibles
     * @return Lane
     */
    public function setResponsibles(Responsibles $responsibles): Lane
    {
        $this->responsibles = $responsibles;
        return $this;
    }

    /**
     * @return Responsibles
     */
    public function getResponsibles(): Responsibles
    {
        return $this->responsibles;
    }

    /**
     * @param string $code
     * @return Lane
     */
    public function setCode(string $code): Lane
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}