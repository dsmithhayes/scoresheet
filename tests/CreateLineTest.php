<?php

use Scoresheet\Statistics\Line;

class CreateLineTest extends PHPUnit_Framework_TestCase
{
    private $line = [

    ];

    public function testCreatingLine()
    {
        $line = new Line(['ab' => 50]);

        $this->assertEquals(50, $line->get('ab'));
    }
}
