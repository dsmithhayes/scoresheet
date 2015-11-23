<?php

namespace Scoresheet\Statistics;

/**
 * All of the properties in this class belong to a pitcher and batter
 * respectively.
 */
abstract class Line
{
    /**
     * @var int Games played
     */
    protected $gp;

    /**
     * @var int Runs
     */
    protected $r;

    /**
     * @var int Hits
     */
    protected $h;

    /**
     * @var int Singles
     */
    protected $b1;

    /**
     * @var int Doubles
     */
    protected $b2;

    /**
     * @var int Triples
     */
    protected $b3;

    /**
     * @var int Home runs
     */
    protected $hr;

    /**
     * @param  string $property The name of the property to get
     * @return mixed            The value of the property from the line
     */
    public function get($property)
    {
        return $this->{$property};
    }

    /**
     * @param string $property The name of the property to set
     * @param mixed  $value    The value to set the property with
     */
    public function set($property, $value)
    {
        $this->{$property} = $value;
    }
}
