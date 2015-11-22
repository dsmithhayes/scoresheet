<?php

namespace Scoresheet\Model\Table;

use Cake\ORM\Table;

class PositionsTable extends Table
{
    public function initialize(array $array)
    {
        $this->hasMany('Players');
    }
}
