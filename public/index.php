<?php

require '../bootstrap.php';

use Slim\Slim;
use Scoresheet\Statistics\Game;
use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Fielding\PitchingCalculator;

/**
 * Entry point of the API.
 */
$scoresheet = new Slim();

/**
 * Routing
 */
$scoresheet->get('/', function () {
    echo 'Welcome to Scoresheet.';
});

/**
 * Pitching calculator
 */
$scoresheet->get('/pitching-calculator/:method+', function ($method) {
    $nameSpace  = "Scoresheet\\Statistics\\Fielding\\PitchingCalculator::";
    $methodName = $nameSpace . $method[0];
    
    array_shift($method);
    echo call_user_func_array($methodName, $method);
})->via('GET');

/**
 * Running
 */
$scoresheet->run();
