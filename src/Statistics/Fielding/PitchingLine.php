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

    /**
     * @return array A key-value array of all the calculated pitching stats
     */
    public function getLine()
    {
        return array_merge($parent::getLine(), [
            'era' => $this->get('era'),
            'whip' => $this->get('whip'),
            'h9' => $this->get('h9'),
            'hr9' => $this->get('hr9'),
            'bb9' => $this->get('bb9'),
            'so9' => $this->get('so9')
        ]);
    }
}
