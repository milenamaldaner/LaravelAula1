<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/olamundo', function(){
	return "Hello World!";
});

Route::get('/olapessoa/{name}', function($name='Estranho'){
	return "Hello " . $name;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('paramaiusculo/{palavra}', 'StringsController@paraMaiusculo');

Route::get('paramaiusculoformatado/{palavra}', 'StringsController@paraMaiusculoFormatado');