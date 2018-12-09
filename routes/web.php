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

Route::get('/','Auth\LoginController@showLoginForm');


Auth::routes();
Route::group(['prefix' => 'admin'], function () {

    Route::get('/','Admin\DashboardController@index')->name('dashboard.index');

    
    Route::post('roles/store','admin\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles','admin\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create','admin\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}','admin\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}','admin\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}','admin\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','admin\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //users

    Route::get('users','admin\UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::get('users/{user}/edit','admin\UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

    Route::put('users/{user}','admin\UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}','admin\UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}','admin\UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');



    //podcast
    Route::post('franchisees/store','admin\PodcastController@store')->name('franchisees.store')
    ->middleware('permission:franchisees.create');

    Route::get('franchisees','admin\PodcastController@index')->name('franchisees.index')
    ->middleware('permission:franchisees.index');

    Route::get('franchisees/create','admin\PodcastController@create')->name('franchisees.create')
    ->middleware('permission:franchisees.create');

    Route::put('franchisees/{franchise}','admin\PodcastController@update')->name('franchisees.update')
    ->middleware('permission:franchisees.edit');

    Route::get('franchisees/{franchise}','admin\PodcastController@show')->name('franchisees.show')
    ->middleware('permission:franchisees.show');

    Route::delete('franchisees/{franchise}','admin\PodcastController@destroy')->name('franchisees.destroy')
    ->middleware('permission:franchisees.destroy');

    Route::get('franchisees/{franchise}/edit','admin\PodcastController@edit')->name('franchisees.edit')
    ->middleware('permission:franchisees.edit');

    
    
    Route::get('/cuadro-de-comandos','Admin\CenterCommandController@index');
    Route::get('/franquiciados','Admin\FranchiseController@index');
    Route::get('/clientes','Admin\ClientController@index');
    Route::get('/clientes/{id}','Admin\ClientController@show');
    Route::get('/mesas','Admin\MesaController@index');
    Route::get('/pedidos','Admin\OrderController@index');
    Route::get('/reservas','Admin\BookingController@index');
    Route::get('/marketing','Admin\MarketingController@index');
    Route::get('/mensaje-push','Admin\PushController@index');
    Route::get('/cupones','Admin\CouponController@index');
    Route::get('/estadistica-de-valoraciones','Admin\StatisticController@index');
    Route::get('/comentario-de-comensales','Admin\CommentController@index');
    Route::get('/publicidad','Admin\PublicidadController@index');
    Route::get('/analitycs','Admin\AnalitycController@index');
    Route::get('/traducciones','Admin\TranslateController@index');

    Route::get('/getfranquiciado/{id}/edit','Admin\FranchiseController@edit');
    Route::get('/demotab','Admin\FranchiseController@demotab');
    
    Route::get('/getCiudad/{any}','Admin\FranchiseController@getCiudad');

    Route::get('/getcliente/{id}/edit','Admin\ClientController@edit');

    Route::get('/miposicionpuntos','Admin\MiPosicionPuntosController@index');
    Route::get('/productoscarta','Admin\ProductosCartaController@index');

    Route::get('/ayuda','Admin\AyudaController@index');
    Route::get('/configuraciones','Admin\ConfigurationController@index');
    Route::get('/precios','Admin\PreciosController@index');
    Route::get('/codigoweb','Admin\CodigoWebController@index');
    Route::get('/mail_sms','Admin\MailSMSController@index');
    Route::get('/paquetes','Admin\PaquetesController@index');
    Route::get('/puntos','Admin\PuntosController@index');
    Route::get('/setting_impresora','Admin\SettingImpresoraController@index');
    Route::get('/tiposcomida','Admin\TiposComidaController@index');
    Route::get('/metodopago','Admin\MetodoPagoController@index');
    Route::get('/paisprovincialocalidad','Admin\PaisPLController@index');
    Route::get('/push_comercios','Admin\PushComerciosController@index');
    Route::get('/push_comensal','Admin\PushComensalController@index');
    
    
});
Route::get('/home', 'HomeController@index')->name('home');
