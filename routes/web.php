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
    return view('admin.login.index');
});


Auth::routes();
Route::group(['prefix' => 'admin'], function () {

    
    Route::get('/','Admin\DashboardController@index');
    Route::get('/cuadro-de-comandos','Admin\CenterCommandController@index');
    Route::get('/franquiciados','Admin\FranchiseController@index');
    Route::get('/clientes','Admin\ClientController@index');
    Route::get('/mesas','Admin\MesaController@index');
    Route::get('/pedidos','Admin\OrderController@index');
    Route::get('/reservas','Admin\BookingController@index');
    Route::get('/marketing','Admin\MarketingController@index');
    Route::get('/mensaje-push','Admin\PushController@index');
    Route::get('/cupones','Admin\CouponController@index');
    Route::get('/estadistica-de-valoraciones','Admin\StatisticController@index');
    Route::get('/comentario-de-comensales','Admin\CommentController@index');
    Route::get('/perfiles-y-puntajes','Admin\PerfilController@index');
    Route::get('/configuraciones','Admin\ConfigurationController@index');
    Route::get('/analitycs','Admin\AnalitycController@index');
    Route::get('/traducciones','Admin\TranslateController@index');

});
Route::get('/home', 'HomeController@index')->name('home');
