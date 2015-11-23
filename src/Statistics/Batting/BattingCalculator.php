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
     * @param  int   $b1 The number of singles
     * @param  int   $b2 The number of doubles
     * @param  int   $b3 The number of triples
     * @param  int   $hr The number of home runs
     * @param  int   $ab The number of at bats
     * @return float     The calculated slugging percentage
     */
    public static function slg($b1, $b2, $b3, $hr, $ab)
    {
        return round((($b1 + (2 * $b2) + (3 * $b3) + (4 * $hr)) / $ab), 3);
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
