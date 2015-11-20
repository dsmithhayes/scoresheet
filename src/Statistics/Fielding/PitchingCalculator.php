<?php

namespace Scoresheet\Statistics\Fielding;

use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Game;

/**
 * This calculator can be used to perform pitching related statistical 
 * equations. All of its methods are static.
 */
class PitchingCalculator extends Calculator
{
    /**
     * @param  int   $bb The number of base on balls
     * @return float     The calculcated base on balls per 9 innings
     */
    public static function bb9($bb, $ip)
    {
        return round((($bb * Game::TOTAL_INNINGS) / $ip), 1);
    }
    
    /**
     * @param  int   $er The number of earned runs
     * @param  int   $ip The number of innings pitched
     * @return float     The calculated ERA.
     */
    public static function era($er, $ip)
    {
        return round(((Game::TOTAL_INNINGS * $er) / $ip), 2);
    }
    
    /**
     * @param int $bb The number of base on balls
     * @param int $h  The number of hits
     * @param int $ip The number of innings pitched
     * @return float The calculated walks and hits per inning pitched.
     */
    public static function whip($bb, $h, $ip)
    {
        return round((($bb + $h) / $ip), 3);
    }
}
