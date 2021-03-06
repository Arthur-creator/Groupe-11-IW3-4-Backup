<?php

use Illuminate\Http\JsonResponse;

/** @var \Laravel\Lumen\Routing\Router $router */
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ListingController::class);

$router->get('/time', function () {
    return new JsonResponse([
        'time' => time(),
    ]);
});
