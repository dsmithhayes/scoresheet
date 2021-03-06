<?php

use Scoresheet\Statistics\Fielding\PitchingCalculator;

/**
 * Randy Johnson's 2001 season is the one of choice.
 */
class CalculatPitchingStatsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Randy's total innings pitched
     */
    protected function ip() {
        return 249.2;
    }

    public function testEra()
    {
        $this->assertEquals(2.49, PitchingCalculator::era(69, $this->ip()));
    }

    public function testBb9()
    {
        $this->assertEquals(2.6, PitchingCalculator::bb9(71, $this->ip()));
    }

    public function testSo9()
    {
        $this->assertEquals(13.4, PitchingCalculator::so9(372, $this->ip()));
    }

    public function testHr9()
    {
        $this->assertEquals(0.7, PitchingCalculator::hr9(19, $this->ip()));
    }

    public function testH9()
    {
        $this->assertEquals(6.5, PitchingCalculator::h9(181, $this->ip()));
    }

    public function testWlp()
    {
        $this->assertEquals(0.778, PitchingCalculator::wlp(21, 6));
    }

    public function testWhip()
    {
        $whip = PitchingCalculator::whip(71, 181, $this->ip());
        $this->assertEquals(1.009, $whip);
    }
}
