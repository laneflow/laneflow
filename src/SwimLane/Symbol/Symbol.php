<?php


namespace Laneflow\Laneflow\SwimLane\Symbol;


use Exception;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use Laneflow\Laneflow\SwimLane\Step\Step;
use ReflectionClass;

class Symbol
{
    protected string $resourceName = '';
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

        return "<div style='  justify-content: center;  display: flex;    align-items: center;min-height: 28px;text-align:center;font-size: 12px; border: 1px solid black; padding: 6px 10px; border-radius: 20px; margin: 10px;'>$label</div>";
    }

    /**
     * @param string $code
     * @return Symbol
     */
    public function setCode(string $code): Symbol
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
     * @return Symbol
     */
    public function setStep(Step $step): Symbol
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
     * @return Symbol
     */
    public function setLabel(string $label): Symbol
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     * @throws Exception
     */
    public function getBaseUri(): string
    {
        if(!empty($this->resourceName)) {
            if(!function_exists('route')){
                throw new Exception('ERRCODE: 43287053473');
            }
            return route($this->resourceName.'.create');
        }

        $reflect = new ReflectionClass($this);
        $shortName = $reflect->getShortName();
        return Str::snake($shortName);
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
}