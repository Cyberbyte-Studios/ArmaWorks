<?php

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
    'prefix' => 'api/armalife',
    'middleware' => ['api']
], function (Router $api) {
//    $api->group(['middleware' => ['auth:api']], function (Router $api) {
        $api->get('dashboard', 'ArmaLifeController@dashboard');
        $api->get('player/audit', 'PlayerController@audits');
        $api->get('player/audit/{id}', 'PlayerController@audit');
        $api->resource('player', 'PlayerController');
        $api->resource('vehicle', 'VehicleController');
        $api->resource('house', 'HouseController');
        $api->resource('container', 'ContainerController');
        $api->resource('wanted', 'WantedController');
        $api->resource('gang', 'GangController');
//    });
});
