<?php

require 'vendor/autoload.php';

/**
 * Welcome to the Scoresheeto bootstrap. This file will run through
 * all of the configure and make sure all of the namespaces are
 * available to the front controller.
 */

/**
 * Namespaces
 */
use Cake\Datasource\ConnectionManager;

/**
 * Connect to a database
 */

ConnectionManager::config('default', [
    'className'     => 'Cake\Database\Connection',
    'driver'        => 'Cake\Database\Driver\Sqlite',
    'persistent'    => false,
    'host'          => 'localhost',
    'database'      => 'scoresheet.db',
    'encoding'      => 'utf8',
    'timezone'      => 'UTC',
    'cacheMetadata' => true,
]);
