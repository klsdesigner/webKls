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

Route::get('/', function() {
   return redirect('login');
});
// Route::get('/', 'Home\HomeController@index')->name('home.index');

/**Grupo de Rotas para Painel */
///->Route::group(['namespace' => 'Painel'],  function(){
    
    /** Index Home */
    ///->Route::get('/Painel', 'PainelController@index')->name('painel.index');
    
    /** Crud Usuários */
   ///-> Route::resource('/Painel/Usuarios', 'UserController')->names('painel.user')->parameters(['Usuarios' => 'user']);
    
    /** Crud Settings */
    // Route::resource('/Painel/Settings', 'SettingController');
    ///->Route::resource('/Painel/ConfigSite', 'SettingController')->names('painel.setting')->parameters(['ConfigSite' => 'setting ']);

    /** Crud Category */


    //Route::get('/Painel/Usuarios', 'UserController@index')->name('painel.usuarios.index');
    // Route::get('/Painel/Usuarios', 'UserController@show')->name('painel.usuarios.show');
    //Route::get('/Painel/Usuarios/{user}', 'UserController@edit')->name('painel.usuarios.edit');
    // Route::put('/Painel/Usuarios', 'Painel\UserController@update')->name('painel.usuarios.update');

///->});

// para autenticação 'middleware' => [], 'prefix' => 'Painel',
Route::group([        
    'prefix' => 'painel',
    'namespace' => 'painel',
    'name' => 'painel.'    
], function(){

    /** Index Home */    
    Route::get('/', 'PainelController@index')->name('painel.index');    
    /** Crud Usuários */    
    Route::prefix('usuarios')->group(function() {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::post('/store', 'UserController@store')->name('user.store');
        Route::get('/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::put('/update/{id}', 'UserController@update')->name('user.update');
        Route::delete('/destroy/{id}', 'UserController@destroy')->name('user.destroy');    
    });    
    /** Crud Settings */    
    Route::prefix('configSite')->group(function(){
        Route::get('/', 'SettingController@index')->name('setting.index');
        Route::get('/create', 'SettingController@create')->name('setting.create');
        Route::post('/store', 'SettingController@store')->name('setting.store');
        Route::post('{id}/edit', 'SettingController@edit')->name('setting.edit');
        Route::post('{id}/update', 'SettingController@update')->name('setting.update');
    });

    /** Crud Category */

});

