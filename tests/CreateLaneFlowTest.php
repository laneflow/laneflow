<?php


namespace Laneflow\Laneflow\Tests;


use Laneflow\Laneflow\Example\ExampleFlow;
use Laneflow\Laneflow\LaneFlow;
use Laneflow\Laneflow\SwimLane\Responsible\Responsible;
use PHPUnit\Framework\TestCase;

class CreateLaneFlowTest extends TestCase
{
    public function testCanCreateLaneFlow()
    {
        $this->assertIsObject(new ExampleFlow());
        $this->assertInstanceOf(LaneFlow::class, new LaneFlow());
    }
    public function testCanViewFlowAsDiagram()
    {
        $exampleFlow = new ExampleFlow();
        $this->assertIsObject($exampleFlow);
        $this->assertIsString((string)$exampleFlow);
    }
    public function testLaneFlowHasResponsible()
    {
        $exampleFlow = new ExampleFlow();
        $responsible = $exampleFlow
            ->getSwimLane()->getLanes()->keys();
        echo $responsible;
        $this->assertInstanceOf(Responsible::class, $responsible);
    }
}