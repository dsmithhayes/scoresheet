<?php

namespace Scoresheet\Statistics\Collection;

use Scoresheet\Statistics\Fielding\PitchingLine;
use Scoresheet\Statsitics\Fielding\PitchingCalculator;

class PitchingLineCollection implements \Iterator
{
    /**
     * @var array $collection Array of PitchingLine objects
     */
    private $collection;

    /**
     * @var int $key The current key of the collection
     */
    private $key;

    /**
     * Construction has to come from an array of existing PitchingLine objects.
     *
     * @param array $collection An array of PitchingLine objects
     */
    public function __construct(array $collection = [])
    {
        $className = '\Scoresheet\Statistics\Fielding\PitchingLine';

        foreach ($collection as $line) {
            if ($line instanceof $className) {
                $this->collection[] = $line;
            }
        }

        $this->key = 0;
    }

    /**
     * @param PitchigLine $pitchingLine A PitchingLine object
     */
    public function push(PitchingLine $pitchingLine)
    {
        $this->collection[++$this->key] = $pitchingLine;
    }

    /**
     * @return PitchingLine The current PitchingLine object from the collection
     */
    public function current()
    {
        return $this->collection[$this->key];
    }

    /**
     * @return int The current key in the collection.
     */
    public function key()
    {
        return $this->key;
    }

    public function next()
    {
        ++$this->key;
    }

    public function rewind()
    {
        $this->key = 0;
    }

    /**
     * @return bool Returns true if the current key is valid.
     */
    public function valid()
    {
        return isset($this->collection[$this->key]);
    }
}
