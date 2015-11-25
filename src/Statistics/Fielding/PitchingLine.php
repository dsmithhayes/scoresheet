<?php

namespace Scoresheet\Statistics\Fielding;

use Scoresheet\Statistics\Line;
use Scoresheet\Statistics\Fielding\PitchingCalculator;

/**
 * This class is used to get and build out the building stats of a pitcher,
 * based on the stats that are purely incremental.
 */

class PitchingLine extends Line
{
    protected $era;
    protected $whip;
    protected $h9;
    protected $hr9;
    protected $bb9;
    protected $so9;

    public static function getLine()
    {
        return array_merge($this->getLine(), [
            'era' => $this->get('era')
        ]);
    }
}
