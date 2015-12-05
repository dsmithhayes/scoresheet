<?php

namespace Scoresheet\Statistics\Collection;

use Scoresheet\Statistics\Line;
use Extended\LinkedList;

class LineList extends LinkedList
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
        $class = '\Scoresheet\Statistics\Line';

        foreach ($collection as $line) {
            if ($line instanceof $class) {
                $this->add($line);
            }
        }
    }

    public function push(Line $line)
    {
        $this->collection[++$this->key] = $line;
    }
}
