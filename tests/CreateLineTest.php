<?php

use Scoresheet\Statistics\Line;

class CreateLineTest extends PHPUnit_Framework_TestCase
{
    private $line = [
        'gp' => 159,
        'ab' => 633,
        'r' => 101,
        'h' => 184,
    ];

    public function testCreatingLine()
    {
        $line = new Line($this->line);

        $this->assertEquals(633, $line->get('ab'));

        return $line;
    }

    /**
     * @depends testCreatingLine
     */
    public function testChangingLine($line)
    {
        $ab = $line->get('ab');
        $line->set('ab', ++$ab);

        $this->assertEquals(634, $line->get('ab'));

        return $line;
    }

    /**
     * @depends testChangingLine
     */
    public function testIncrementingLine($line)
    {
        $line->inc('gp');

        $this->assertEquals(160, $line->get('gp'));

        return $line;
    }
}
