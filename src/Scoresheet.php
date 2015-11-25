<?php

namespace Scoresheet;

use Scoresheet\Statistics\Calculator\PitchingCalculator;
use Scoresheet\Statistics\Calculator\BattingCalculator;

class Scoresheet
{
    /**
     * @var Player $player Player stats object
     */
    private $player;

    /**
     * @var PitchingLine $pitchingLine Pitching line object
     */
    private $pitchingLine;

    /**
     * @var BattingLine $battingLine Batting line object
     */
    private $battingLine;

    /**
     * @param array @playerStats And array of objects for the Scoresheet
     */
    public function __construct(array $playerStats = [])
    {
        foreach ($playerStats as $objectName => $object) {
            if (property_exists($this, $objectName)) {
                $this->{$objectName} = $object;
            }
        }
    }

    public function player()
    {
        return $this->player;
    }

    public function pitchingStats()
    {
        return $this->pitchingStats;
    }

    public function battingStats()
    {
        return $this->battingStats()
    }
}
