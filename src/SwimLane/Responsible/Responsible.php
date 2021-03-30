<?php


namespace Laneflow\Laneflow\SwimLane\Responsible;


use Illuminate\Support\Str;
use ReflectionClass;

class Responsible
{
    protected string $code;

    public function __construct()
    {
        $reflect = new ReflectionClass($this);

        $this->setCode(Str::snake($reflect->getShortName()));
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