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
    'prefix' => 'admin/configuracao',
    'namespace' => 'Admin',
    'name' => 'admin.configuracao.'
], function(){ 

    /**
     * ROTAS CRUD CONFIGURAÇÃO 
     */
    // Listagem
    Route::get('/index', 'ConfiguracaoController@index')->name('index');
    // Exibe formulario
    Route::get('/create', 'ConfiguracaoController@create')->name('create');
    // Crea um novo no banco
    Route::get('/store', 'ConfiguracaoController@store')->name('store');
    // Exibe formulario de edição
    Route::get('/show', 'ConfiguracaoController@show')->name('show');
    // Realiza a alteração no banco
    Route::get('/edit', 'ConfiguracaoController@edit')->name('edit');
    // Apaga um determinado item do banco
    Route::get('/destroy', 'ConfiguracaoController@destroy')->name('destroy');  

    // Redireciona para tela pricipal index
    Route::get('/', function () {
        return redirect()->route('admin.configuracao.index');
    })->name('home');

    

});



/**
 * ROTAS CRUD CONFIGURAÇÃO 
 */
// Listagem
// Route::get('/admin/configuracao/index', 'Admin/ConfiguracaoController@index')->name('admin.configuracao.index');
// // Exibe formulario
// Route::get('/admin/configuracao/create', 'Admin/ConfiguracaoController@create')->name('admin.configuracao.create');
// // Crea um novo no banco
// Route::get('/admin/configuracao/store', 'Admin/ConfiguracaoController@store')->name('admin.configuracao.store');
// // Exibe formulario de edição
// Route::get('/admin/configuracao/show', 'Admin/ConfiguracaoController@show')->name('admin.configuracao.show');
// // Realiza a alteração no banco
// Route::get('/admin/configuracao/edit', 'Admin/ConfiguracaoController@edit')->name('admin.configuracao.edit');
// // Apaga um determinado item do banco
// Route::get('/admin/configuracao/destroy', 'Admin/ConfiguracaoController@destroy')->name('admin.configuracao.destroy');

