<?php


namespace Laneflow\Laneflow\SwimLane\Responsible;


use Illuminate\Support\Str;

class Responsible
{
    protected string $code;

    public function __construct()
    {
        $this->setCode(Str::snake(__CLASS__));
    }

    /**
     * @param string $code
     * @return Responsible
     */
    public function setCode(string $code): Responsible
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