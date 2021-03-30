<?php


namespace Laneflow\Laneflow\SwimLane\Process;


use Illuminate\Support\Str;
use ReflectionClass;

class Process
{
    protected string $code;
    protected string $step;

    public function __construct()
    {
        $reflect = new ReflectionClass($this);

        $this->setCode(Str::snake($reflect->getShortName()));
    }

    /**
     * @param string $code
     * @return Process
     */
    public function setCode(string $code): Process
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
     * @param string $step
     * @return Process
     */
    public function setStep(string $step): Process
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
}