<?php


namespace Laneflow\Laneflow\SwimLane\Step;


use Laneflow\Laneflow\SwimLane\Process\Process;
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
     * @param Process $process
     * @return $this
     */
    public function addProcess(Process$process): Step
    {
        $process->setStep($this);
        return $this;
    }
}