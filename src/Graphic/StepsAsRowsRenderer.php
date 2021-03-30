<?php


namespace Laneflow\Laneflow\Graphic;


use Laneflow\Laneflow\SwimLane\Lane\Lane;
use Laneflow\Laneflow\SwimLane\Lanes;
use Laneflow\Laneflow\SwimLane\Process\Process;
use Laneflow\Laneflow\SwimLane\Step\Step;
use Laneflow\Laneflow\SwimLane\SwimLane;

class StepsAsRowsRenderer
{
    /**
     * @var SwimLane
     */
    private SwimLane $swimLane;

    public function __construct(SwimLane$swimLane)
    {
        $this->swimLane = $swimLane;
    }

    public function __toString(): string
    {
        $swimLane = $this->getSwimlane();
        $lanes = $swimLane->getLanes();
        $steps = $swimLane->getSteps();
        $renderer = $this;
        $rows = $steps
            ->map(function(Step$step) use ($renderer, $lanes) {
                $cells = $renderer->getCellsForStep($lanes, $step);
                return <<<HTML
<tr>
    $cells
</tr>
HTML;
            })
            ->implode('')
        ;
        return <<<HTML
    $rows
HTML;
    }

    /**
     * @param SwimLane $swimLane
     * @return StepsAsRowsRenderer
     */
    public function setSwimLane(SwimLane $swimLane): StepsAsRowsRenderer
    {
        $this->swimLane = $swimLane;
        return $this;
    }

    /**
     * @return SwimLane
     */
    public function getSwimLane(): SwimLane
    {
        return $this->swimLane;
    }

    private function getCellsForStep(Lanes $lanes, Step $step): string
    {
        return $lanes->map(function(Lane$lane) use ($step) {
            $matchProcess = $lane
                ->getProcesses()
                ->first(function (Process $process) use ($step) {
                    return $process->getStep() === $step;
                });
            if($matchProcess instanceof Process) {
                return "<td>$matchProcess</td>";
            }else {
                return '<td></td>';
            }
        })
            ->implode('');
    }

}