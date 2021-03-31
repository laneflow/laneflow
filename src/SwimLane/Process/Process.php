<?php


namespace Laneflow\Laneflow\SwimLane\Process;


use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\SwimLane\Step\Step;
use ReflectionClass;

class Process
{
    protected string $code;
    protected string $label;
    protected Step $step;

    public function __construct($code = null, $label = null)
    {
        $reflect = new ReflectionClass($this);

        if(empty($code)){
            $code = Str::snake($reflect->getShortName());
        }
        $this->setCode($code);

        if(empty($label)) {
            $label = $reflect->getShortName();
        }
        $this->setLabel($label);
    }

    #[Pure] public function __toString(): string
    {
        $label = $this->getLabel();

        return "<div style='text-align:center;font-size: 12px; border: 1px solid black; padding: 6px 10px; border-radius: 20px; margin: 10px;'>$label</div>";
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

    /**
     * @param string $label
     * @return Process
     */
    public function setLabel(string $label): Process
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
}