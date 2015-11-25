<?php

namespace Scoresheet\Statistics;

/**
 * All of the properties in this class belong to a pitcher and batter
 * respectively.
 */
class Line
{
    /**
     * @var int Games played
     */
    protected $gp;

    /**
     * @var int At bats
     */
    protected $ab;

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
     * @var int Balls
     */
    protected $bb;

    /**
     * @var int Hit by pitches
     */
    protected $hbp;

    /**
     * @var int Strike outs
     */
    protected $so;

    /**
     * @param array $stats An array of integer stats
     */
    public function __construct(array $stats)
    {
        foreach ($stats as $property => $value) {
            if (property_exists($this, $property)) {
                $this->set($property, $value);
            }
        }
    }

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

    /**
     * @return array A key'd array of the properties in the line.
     */
    public function getLine()
    {
        return [
            'gp' => $this->get('gp'),
            '1b' => $this->get('b1'),
            '2b' => $this->get('b2'),
            '3b' => $this->get('b3'),
            'hr' => $this->get('hr')
        ];
    }
}
