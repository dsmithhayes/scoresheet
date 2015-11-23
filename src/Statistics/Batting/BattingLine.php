<?php

namespace Scoresheet\Statistics\Batting;

use Scoresheet\Statistics\Line;

class BattingLine extends Line
{
    /**
     * @var int At bats
     */
    protected $ab;

    protected $sf;
    protected $ba;
    protected $slg;

    public function getLine()
    {
        retrun array_merge(parent::getLine(), [
            'ab' => $this->ab
            'sf' => $this->sf
        ]);
    }
}
