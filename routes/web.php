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

    
    Route::post('roles/store','Admin\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles','Admin\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create','Admin\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}','Admin\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}','Admin\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}','Admin\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','Admin\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //clients

    Route::get('clients','Admin\ClientController@index')->name('clients.index')
    ->middleware('permission:clients.index');

    Route::post('clients/store','Admin\ClientController@store')->name('clients.store')
    ->middleware('permission:clients.create');

    Route::get('clients/{client}/edit','Admin\ClientController@edit')->name('clients.edit')
    ->middleware('permission:clients.edit');

    Route::put('clients/{client}','Admin\ClientController@update')->name('clients.update')
    ->middleware('permission:clients.edit');

    Route::get('clients/{client}','Admin\ClientController@show')->name('clients.show')
    ->middleware('permission:clients.show');

    Route::delete('clients/{client}','Admin\ClientController@destroy')->name('clients.destroy')
    ->middleware('permission:clients.destroy');

    Route::post('clients/foto','Admin\ClientController@foto')->name('clients.foto')
    ->middleware('permission:clients.create');

    Route::put('clients/foto/{client}','Admin\ClientController@fotoupdate')->name('clients.fotoupdate')
    ->middleware('permission:clients.edit');


    Route::post('clients/service','Admin\ClientController@service')->name('clients.service')
    ->middleware('permission:clients.create');

    Route::put('clients/service/{client}','Admin\ClientController@serviceUpdate')->name('clients.serviceUpdate')
    ->middleware('permission:clients.edit');


    Route::post('clients/configuration','Admin\ClientController@configuration')->name('clients.configuration')
    ->middleware('permission:clients.create');

    Route::put('clients/configuration/{client}','Admin\ClientController@configurationUpdate')->name('clients.configurationUpdate')
    ->middleware('permission:clients.edit');

    Route::put('clients-estado/{franchise}','Admin\ClientController@cambioestado')->name('clients.estado')
    ->middleware('permission:clients.edit');

    //franchise
    Route::post('franchisees/store','Admin\FranchiseController@store')->name('franchisees.store')
    ->middleware('permission:franchisees.create');

    Route::get('franchisees','Admin\FranchiseController@index')->name('franchisees.index')
    ->middleware('permission:franchisees.index');

    Route::get('franchisees/create','Admin\FranchiseController@create')->name('franchisees.create')
    ->middleware('permission:franchisees.create');

    Route::put('franchisees/{franchise}','Admin\FranchiseController@update')->name('franchisees.update')
    ->middleware('permission:franchisees.edit');

    Route::get('franchisees/{franchise}','Admin\FranchiseController@show')->name('franchisees.show')
    ->middleware('permission:franchisees.show');

    Route::delete('franchisees/{franchise}','Admin\FranchiseController@destroy')->name('franchisees.destroy')
    ->middleware('permission:franchisees.destroy');

    Route::get('franchisees/{franchise}/edit','Admin\FranchiseController@edit')->name('franchisees.edit')
    ->middleware('permission:franchisees.edit');
   

    Route::put('franchisees-estado/{franchise}','Admin\FranchiseController@cambioestado')->name('franchisees.estado')
    ->middleware('permission:franchisees.edit');
    //mozos

    Route::get('mozos','Admin\MozoController@index')->name('mozos.index')
    ->middleware('permission:mozos.index');

  Route::post('mozos/store','Admin\MozoController@store')->name('mozos.store')
  ->middleware('permission:mozos.create');

 

  Route::get('mozos/create','Admin\MozoController@create')->name('mozos.create')
  ->middleware('permission:mozos.create');

  Route::put('mozos/{mozo}','Admin\MozoController@update')->name('mozos.update')
  ->middleware('permission:mozos.edit');

  Route::get('mozos/{mozo}','Admin\MozoController@show')->name('mozos.show')
  ->middleware('permission:mozos.show');

  Route::delete('mozos/{mozo}','Admin\MozoController@destroy')->name('mozos.destroy')
  ->middleware('permission:mozos.destroy');

  Route::get('mozos/{mozo}/edit','Admin\MozoController@edit')->name('mozos.edit')
  ->middleware('permission:mozos.edit');
    
    
    Route::get('/cuadro-de-comandos','Admin\CenterCommandController@index');
    //Route::get('/franquiciados','Admin\FranchiseController@index');
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
/*

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
