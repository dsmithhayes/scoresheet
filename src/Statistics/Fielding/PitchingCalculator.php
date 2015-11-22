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
     * @param  int   $er The number of earned runs
     * @param  int   $ip The number of innings pitched
     * @return float     The calculated ERA.
     */
    public static function era($er, $ip)
    {
        return round(((Game::TOTAL_INNINGS * $er) / $ip), 2);
    }
    
    /**
     * @param  int   $bb The number of base on balls
     * @param  int   $h  The number of hits
     * @param  int   $ip The number of innings pitched
     * @return float     The calculated walks and hits per inning pitched.
     */
    public static function whip($bb, $h, $ip)
    {
        return round((($bb + $h) / $ip), 3);
    }

    /**
     * @param  int   $h  The number of hits
     * @param  int   $ip The number of innings pitched
     * @return float     The calculated hits per 9 innings
     */
    public static function h9($h, $ip)
    {
        return round((($h * Game::TOTAL_INNINGS) / $ip), 1);
    }
    
    /**
     * @param  int   $hr The number of home runs
     * @param  int   $ip The number of innings pitched
     * @return float     The claculated home runs per 9 innings
     */
    public static function hr9($hr, $ip)
    {
        return round((($hr * Game::TOTAL_INNINGS) / $ip), 1);
    }

    /**
     * @param  int   $bb The number of base on balls
     * @param  int   $ip The number of innings pitched
     * @return float     The calculcated base on balls per 9 innings
     */
    public static function bb9($bb, $ip)
    {
        return round((($bb * Game::TOTAL_INNINGS) / $ip), 1);
    }
    
    /**
     * @param  int   $so The number of strike outs
     * @param  int   $ip The number of innings pitched
     * @return float     The claculated strike outs per 9 innings
     */
    public static function so9($so, $ip)
    {
        return round((($so *Game::TOTAL_INNINGS) / $ip), 1);
    }
    
    
}
