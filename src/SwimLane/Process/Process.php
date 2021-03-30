<?php


namespace Laneflow\Laneflow\SwimLane\Process;


use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\SwimLane\Step\Step;
use ReflectionClass;

class Process
{
    protected string $code;
    protected Step $step;

    public function __construct()
    {
        $reflect = new ReflectionClass($this);

        $this->setCode(Str::snake($reflect->getShortName()));
    }

    #[Pure] public function __toString(): string
    {
        $code = $this->getCode();
        $stepCode = $this->getStep()->getCode();

        return "Process $code on step $stepCode";
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
     * @param Step $step
     * @return Process
     */
    public function setStep(Step $step): Process
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return Step
     */
    public function getStep(): Step
    {
        return $this->step;
    }
}