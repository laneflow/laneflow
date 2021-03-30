<?php


namespace Laneflow\Laneflow\SwimLane\Lane;


use Laneflow\Laneflow\SwimLane\Process\Process;
use Laneflow\Laneflow\SwimLane\Processes;
use Laneflow\Laneflow\SwimLane\Responsible\Responsible;
use Laneflow\Laneflow\SwimLane\Responsibles;

class Lane
{
    protected string $label;

    protected Processes $processes;
    protected Responsibles $responsibles;

    public function addResponsible(Responsible$responsible): Lane
    {
        $this->getResponsibles()
            ->put($responsible->getCode(), $responsible);

        return $this;
    }

    public function addProcess(Process$process)
    {
        $this->getProcesses()->put($process->getCode(), $process);
    }

    public function __construct()
    {
        $this->setProcesses(new Processes());
        $this->setResponsibles(new Responsibles());

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
}