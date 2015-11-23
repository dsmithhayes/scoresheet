<?php

require '../bootstrap.php';

use Slim\Slim;
use Scoresheet\Statistics\Game;
use Scoresheet\Statistics\Calculator;
use Scoresheet\Statistics\Fielding\PitchingCalculator;
use Scoresheet\Statistics\Batting\BattingCalculator;

/**
 * Entry point of the API.
 */
$scoresheet = new Slim();

/**
 * Routing
 */
$scoresheet->get('/', function () {
    echo "Scoresheet. a Baseball API\n";
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
 * Batting calculator
 */
$scoresheet->get('/batting-calculator/:method+', function ($method) {
    $nameSpace = "Scoresheet\\Statistics\\Batting\\BattingCalculator::";
    $methodName = $nameSpace . $method[0];

    array_shift($method);

    echo call_user_func_array($methodName, $method);
})->via('GET');

/**
 * Running
 */
$scoresheet->run();
