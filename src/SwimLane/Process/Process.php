<?php


namespace Laneflow\Laneflow\SwimLane\Process;


use Illuminate\Support\Str;

class Process
{
    protected string $code;

    public function __construct()
    {
        $this->setCode(Str::snake(__CLASS__));
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
}