<?php

/**
 * The database configuration sits here.
 */

return [
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
//            'username' => 'my_app',
//            'password' => 'sekret',
            'database' => 'scoresheet.db',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
        ]
    ]
];
