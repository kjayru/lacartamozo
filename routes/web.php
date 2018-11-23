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

    
    Route::get('/','Admin\DashboardController@index');
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
