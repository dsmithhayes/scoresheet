<?php

namespace Scoresheet\Statistics;

abstract class Player
{
    const PITCHER           = 1;
    const CATCHER           = 2;
    const FIRST_BASE        = 3;
    const SECOND_BASE       = 4;
    const THIRD_BASE        = 5;
    const SHORT_STOP        = 6;
    const LEFT_FIELD        = 7;
    const CENTER_FIELD      = 8;
    const RIGHT_FIELD       = 9;
    const DESIGNATED_HITTER = 10;
    const ROVER             = 0;

    /**
     * @var string The first name of the player
     */
    protected $first_name;

    /**
     * @var string The last name of the player
     */
    protected $last_name;

    /**
     * @var int The number of the player
     */
    protected $number;

    /**
     * @var int The position number of the player.
     */
    protected $position;

    /**
     * @param array $config Key-Value array of the properties within the object
     */
    public function __construct(array $config)
    {
        foreach ($config as $property => $value) {
            $this->{$property} = $value;
        }
    }

    /**
     * @param  string $short The short form of a position, 'ss' is short stop
     * @return int           The position number
     */
    public static function parsePositionShort($short)
    {
        switch ($short) {
            case 'p':
            case 'P':
                return self::PITCHER;
            case 'c':
            case 'C':
                return self::CATCHER;
            case '1b':
            case '1B':
                return self::FIRST_BASE;
            case '2b':
            case '2B':
                return self::SECOND_BASE;
            case '3b':
            case '3B':
                return self::THIRD_BASE;
            case 'ss':
            case 'SS':
                return self::SHORT_STOP;
            case 'lf':
            case 'LF':
                return self::LEFT_FIELD;
            case 'cf':
            case 'CF':
                return self::CENTER_FIELD;
            case 'rf':
            case 'RF':
                return self::RIGHT_FIELD;
            case 'dh':
            case 'DH':
                return self::DESIGNATED_HITTER;
            default:
                return self::ROVER;
        }
    }
}
