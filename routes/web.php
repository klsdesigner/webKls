<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});
 

Auth::routes();

Route::get('/', 'Home\HomeController@index')->name('home.index');

/**Grupo de Rotas para Painel */
Route::group(['namespace' => 'Painel'],  function(){

    Route::get('/Painel', 'PainelController@index')->name('painel.index');

    
    Route::get('/Painel/Usuarios', 'UserController@index')->name('painel.usuarios.index');
    // Route::get('/Painel/Usuarios', 'UserController@show')->name('painel.usuarios.show');
    Route::get('/Painel/Usuarios/{user}', 'UserController@edit')->name('painel.usuarios.edit');
    // Route::put('/Painel/Usuarios', 'Painel\UserController@update')->name('painel.usuarios.update');

});

