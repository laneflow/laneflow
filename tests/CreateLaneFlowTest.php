<?php


namespace Laneflow\Laneflow\Tests;


use Laneflow\Laneflow\Example\ExampleFlow;
use Laneflow\Laneflow\LaneFlow;
use PHPUnit\Framework\TestCase;

class CreateLaneFlowTest extends TestCase
{
    public function testCanCreateLaneFlow()
    {
        $this->assertIsObject(new ExampleFlow());
        $this->assertInstanceOf(LaneFlow::class, new LaneFlow());
    }
}