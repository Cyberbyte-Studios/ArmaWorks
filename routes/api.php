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
$api->version('v1', [
    'namespace' => 'ArmaWorks\Api\Controllers',
    'middleware' => ['api']
], function (Router $api) {
    $api->get('status', 'StatusApiController@index');

    $api->group(['middleware' => ['auth:api']], function (Router $api) {
        $api->get('users', 'UsersApiController@index');

        $api->post('users', 'UsersApiController@store');

        $api->get('users/me', 'UsersApiController@me');

        $api->get('users/{id}', 'UsersApiController@show');

        $api->put('users/{id}', 'UsersApiController@update');

        $api->delete('users/{id}', 'UsersApiController@destroy');
    });
});
