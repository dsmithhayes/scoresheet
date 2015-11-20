<?php

namespace Scoresheet\Statistics;

abstract class Calculator
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
     * Parses a formatted inning like 2.1 into a real number.
     *
     * @param float $ip A formatted inning
     * @return float A real number
     */
    public static function parseInnings($ip)
    {
        $pattern = '/\.\d+/';
        if (preg_match($pattern, $ip)) {
            $ip = explode('.', $ip);
            
            switch ($ip[1]) {
                case 1:
                    return $ip[0] + self::oneThirdInning();
                case 2:
                    return $ip[0] + self::twoThirdsInning();
                default:
                    return $ip[0];
            }
        }
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
}
