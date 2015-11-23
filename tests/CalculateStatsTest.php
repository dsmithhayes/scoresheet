<?php

use Scoresheet\Statistics\Calculator;

class CalculateStatsTest extends PHPUnit_Framework_TestCase
{
    public function testParseOneThirdInnings()
    {
        $this->assertEquals(
            1.3333333333333333,
            Calculator::parseInnings(1.1));
    }

    public function testParseTwoThirdsInnings()
    {
        $this->assertEquals(
            1.6666666666666665,
            Calculator::parseInnings(1.2));
    }

    public function testWlp()
    {
        $this->assertEquals(
            0.5,
            Calculator::wlp(5, 5));

        $this->assertEquals(
            0.25,
            Calculator::wlp(5, 15));
    }

    /**
     * @expectedException \Scoresheet\Exception\InvalidParsingException
     */
    public function testParseException()
    {
        Calculator::parseInnings('failure');
    }
}
