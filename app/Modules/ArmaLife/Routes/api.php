<?php

use ArmaWorks\Modules\ArmaLife\Http\Controllers\ContainerController;
use ArmaWorks\Modules\ArmaLife\Http\Controllers\GangController;
use ArmaWorks\Modules\ArmaLife\Http\Controllers\HouseController;
use ArmaWorks\Modules\ArmaLife\Http\Controllers\PlayerController;
use ArmaWorks\Modules\ArmaLife\Http\Controllers\VehicleController;
use ArmaWorks\Modules\ArmaLife\Http\Controllers\WantedController;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// v1
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'ArmaWorks\Modules\ArmaLife\Http\Controllers',
    'middleware' => ['api']
], function (Router $api) {
    $api->group(['middleware' => ['auth:api']], function (Router $api) {
        $api->get('dashboard', 'ArmaLifeController@dashboard');
        $api->get('player/audit', 'PlayerController@audits');
        $api->get('player/audit/{id}', 'PlayerController@audit');
        $api->resource('player', PlayerController::class);
        $api->resource('vehicle', VehicleController::class);
        $api->resource('house', HouseController::class);
        $api->resource('container', ContainerController::class);
        $api->resource('wanted', WantedController::class);
        $api->resource('gang', GangController::class);
    });
});
