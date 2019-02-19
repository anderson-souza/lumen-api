<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/teste', 'Examplecontroller@teste');
$router->get('/lista-usuarios', 'APIController@ListaUsuario');

//GET CLIENTE
$router->get('/clientes', 'APIController@ListaClientes');
$router->get('/clientes/{id}', 'APIController@ListaCliente');

// PUT CLIENTE
$router->put('/clientes', 'APIController@CadastraCliente');

//DELETE CLIENTE
$router->delete('/clientes/{id}', 'APIController@DeleteCliente');

//ATUALIZA CLIENTE
$router->post('/clientes', 'APIController@AlteraCliente');