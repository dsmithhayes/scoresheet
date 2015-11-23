<?php

namespace Scoresheet\Statistics\Fielding;

use Scoresheet\Statistics\Line;

/**
 * This class is used to get and build out the building stats of a pitcher,
 * based on the stats that are purely incremental.
 */

class PitchingLine extends Line
{
    protected $era;
    protected $whip;

    public function addHit()
    {
        return ++$this->h;
    }
}
