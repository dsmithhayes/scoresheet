<?php

use Scoresheet\Statistics\Batting\BattingCalculator;

/**
 * Using Yoenis Cespedes 2015 season.
 */
class CalculateBattingStatsTest extends PHPUnit_Framework_TestCase
{
    public function testBa()
    {
        $this->assertEquals(0.291, BattingCalculator::ba(184, 633));
    }

    public function testObp()
    {
        $obp = BattingCalculator::obp(184, 33, 5, 633, 5);
        $this->assertEquals(0.328, $obp);

        return $obp;
    }

    public function testSlg()
    {
        $slg = BattingCalculator::slg(101, 42, 6, 35, 633);
        $this->assertEquals(0.542, $slg);

        return $slg;
    }

    /**
     * @depends testObp
     * @depends testSlg
     */
    public function testOps($obp, $slg)
    {
        $this->assertEquals(0.870, BattingCalculator::ops($obp, $slg));
    }
}
