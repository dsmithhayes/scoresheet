<?php

namespace Scoresheet\Statistics\Batting;

use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Game;

class BattingCalculator extends Calculator
{
    /**
     * @param  int   $h  The number of hits
     * @param  int   $ab The number of at-bats
     * @return float     The calculated batting average.
     */
    public static function ba($h, $ab)
    {
        return round(($h / $ab), 3);
    }
    
    /**
     * @param  int   $h   The number of hits
     * @param  int   $bb  The number of walks
     * @param  int   $hbp The number of hit by pitches
     * @param  int   $ab  The number of at-bats
     * @param  int   $sf  The number of sacrifice flies
     * @reutnr float      The calculated on-base percentage
     */
    public static function obp($h, $bb, $hbp, $ab, $sf)
    {
        return round((($h + $bb + $hbp) / ($ab + $bb + $hbp + $sf)), 3);
    }
    
    /**
     * @param  int   $1b The number of singles
     * @param  int   $2b The number of doubles
     * @param  int   $3b The number of triples
     * @param  int   $hr The number of home runs
     * @param  int   $ab The number of at bats
     * @return float     The calculated slugging percentage
     */
    public static function slg($1b, $2b, $3b, $hr, $ab)
    {
        return round((($1b + (2 * $2b) + (3 * $3b) + (4 * $hr)) / $ab), 3);
    }
    
    /**
     * @param  float $obp The on-base percentage
     * @param  float $slg The slugging percentage
     * @return float      The calculated on-base plus slugging percentage
     */
    public static function ops($obp, $slg)
    {
        return $obp + $slg;
    }
}
