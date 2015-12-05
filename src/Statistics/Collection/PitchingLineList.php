<?php

namespace Scoresheet\Statistics\Collection;

use Scoresheet\Statistics\Fielding\PitchingLine;
use Scoresheet\Statsitics\Fielding\PitchingCalculator;
use Extended\LinkedList;

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

    /**
     * @param array An array of PitchingLine objects
     */
    public function __construct(array $collection = [])
    {
        $class = '\Scoresheet\Statistics\Fielding\PitchingLine';

        foreach ($collection as $line) {
            if ($line instanceof $class) {
                $this->add($line);
            }
        }
    }

    public function push(PitchingLine $pitchingLine)
    {
        $this->collection[++$this->key] = $pitchingLine;
    }
}
