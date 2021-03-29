<?php


namespace Laneflow\Laneflow\Tests;


use Laneflow\Laneflow\LaneFlow;
use PHPUnit\Framework\TestCase;

class CreateLaneFlowTest extends TestCase
{
    public function testCanCreateLaneFlow()
    {
        $this->assertInstanceOf(LaneFlow::class, new LaneFlow());
    }
}