<?php

namespace Scoresheet\Statistics\Collection;

use Scoresheet\Statistics\Fielding\PitchingLine;
use Scoresheet\Statsitics\Fielding\PitchingCalculator;
use Extedned\LinkedList;

class PitchingLineList extends LinkedList
{
    /**
     * @var array $collection Array of PitchingLine objects
     */
    private $collection;

    /**
     * @var int $key The current key of the collection
     */
    private $key;

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

    public function push(PitchingLine $pitchingLine)
    {
        $this->collection[++$this->key] = $pitchingLine;
    }

    public function current()
    {
        return $this->collection[$this->key];
    }

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

    public function valid()
    {
        return isset($this->collection[$this->key]);
    }
}
