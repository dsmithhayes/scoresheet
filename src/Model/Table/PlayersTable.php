<?php

namespace Scoresheet\Model\Table;

use Cake\ORM\Table;

class PlayersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasOne('Positions');
    }
}
