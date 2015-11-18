<?php

namespace Scoresheet\Statistics\Fielding;

use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Game;

class PitchingCalculator extends Calculator
{
    /**
     * Use this to add the actual two-thirds value to the innings for easier 
     * calculations.
     *
     * @return float One third in decimal
     */
    public static function oneThirdInning()
    {
        return 1 / 3;
    }
    
    /**
     * Use this to add the actual two-thirds value to the innings for easier 
     * calculations.
     * 
     * @return float Two thirds in decimal
     */
    public static function twoThirdsInning()
    {
        return 2 / 3;
    }

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
     * @param  int   $w The number of total wins
     * @param  int   $l The number of total losses
     * @return float    The calculated win-loss percentage
     */
    public static function wlp($w, $l)
    {
        $totalDecisions = $w + $l;
        
        return round(($w / $totalDecisions), 3);
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
