<?php


namespace Laneflow\Laneflow\SwimLane\Step;


class Step
{
    protected string $code;

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
}