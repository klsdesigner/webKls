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

Route::get('/', function () {
    return view('welcome');
});

//GRUPO DE ROTAS MIDDLEWARE
/* 
Route::middleware(['auth'])->group(function () {
    //GRUPO DE ROTAS PREFIX
    Route::prefix('admin')->group(function () {
        // GRUPO DE ROTAS NAMESPACE
        Route::namespace('Admin')->group(function () {           
            //GRUPO DE ROTAS NAME
            Route::name('admin.')->group(function () {

                Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
                Route::get('/configuracao', 'configuracaoController@configuracao')->name('configuracao');
                Route::get('/categoria', 'categoriaController@categorias')->name('categoria');
                
                Route::get('/', function () {
                    return redirect()->route('admin.dashboard');
                })->name('home');

            });          

        });
        
    });
 
});
*/ 

//GRUPO DE ROTAS
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function(){ 

    Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
    Route::get('/configuracao', 'configuracaoController@configuracao')->name('configuracao');
    Route::get('/categoria', 'categoriaController@categorias')->name('categoria');
    
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');

});
