<?php

namespace Scoresheet\Statistics\Fielding;

use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Game;

class PitchingCalculator extends Calculator
{
    
    /**
     * Calculates the era.
     */
    public static function era($runs, $inningsPitched)
    {
        return round(((Game::TOTAL_INNINGS * $runs) / $inningsPitched), 2);
    }
}
