<?php


namespace Laneflow\Laneflow\SwimLane\Lane;


use Illuminate\Support\Str;
use Laneflow\Laneflow\SwimLane\Process\Process;
use Laneflow\Laneflow\SwimLane\Processes;
use Laneflow\Laneflow\SwimLane\Responsible\Responsible;
use Laneflow\Laneflow\SwimLane\Responsibles;
use ReflectionClass;

class Lane
{
    protected string $code;
    protected string $label;

    protected Processes $processes;
    protected Responsibles $responsibles;

    public function addResponsible(Responsible$responsible): Lane
    {
        $this->getResponsibles()
            ->put($responsible->getCode(), $responsible);

        return $this;
    }

    public function addProcess(Process$process): Lane
    {
        $this->getProcesses()->put($process->getCode(), $process);

        return $this;
    }

    public function __construct()
    {
        $this->setProcesses(new Processes());
        $this->setResponsibles(new Responsibles());
        $reflect = new ReflectionClass($this);
        $shortName = $reflect->getShortName();
        $this->setCode(Str::snake($shortName));
        $this->setLabel(Str::title($shortName));

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
     * @param Processes $processes
     * @return Lane
     */
    public function setProcesses(Processes $processes): Lane
    {
        $this->processes = $processes;
        return $this;
    }

    /**
     * @return Processes
     */
    public function getProcesses(): Processes
    {
        return $this->processes;
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