<?php


namespace Laneflow\Laneflow\SwimLane\Step;


use Laneflow\Laneflow\SwimLane\Symbol\Symbol;
use ReflectionClass;

class Step
{
    protected string $code;

    public function __construct()
    {
        $reflect = new ReflectionClass($this);
        $this->setCode($reflect->getShortName());
    }

    /**
     * @param string $code
     * @return Step
     */
    public function setCode(string $code): Step
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

    /**
     * @param Symbol $symbol
     * @return $this
     */
    public function addSymbol(Symbol$symbol): Step
    {
        $symbol->setStep($this);
        return $this;
    }
}