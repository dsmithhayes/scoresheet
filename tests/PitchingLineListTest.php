<?php

use Scoresheet\Statistics\Collection\LineList;
use Scoresheet\Statistics\Fielding\PitchingLine;

class PitchingLineListTest extends PHPUnit_Framework_TestCase
{
    public function testPitchingLineList()
    {
        $list = new LineList([
            new PitchingLine([
                'ab' => 100,
                'h' => 14,
            ]),
            new PitchingLine([
                'ab' => 103,
                'h' => 16
            ])
        ]);

        foreach ($list as $l) {
            if ($list->first()) {
                $this->assertEquals(100, $l->get('ab'));
                break;
            }
        }

        return $list;
    }
}
