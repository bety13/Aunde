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


/*
|------------------------------------------------------------------------------
|        T e l a s     N u e v a s     a    R e g i s t r a r                 |
|------------------------------------------------------------------------------
*/

 Route::resource('clientes','ClientesController');

 Route::resource('telastejidos','TelastejidoController');

 Route::resource('telaslavados','TelaslavadoController');

 Route::resource('telastumblers','TelastumblerController');

 Route::resource('telasrepelentes','TelasrepelenteController');

 Route::resource('telasbackings','TelasbackingController');

 Route::resource('telastermofijados','TelastermofijadoController');

 Route::resource('telaspunzonados','TelaspunzonadoController');

 Route::resource('telasbondeos','TelasbondeoController');

/*
|------------------------------------------------------------------------------
|                       D a t o s      G e n e r a l e s                      |
|------------------------------------------------------------------------------
*/

Route::resource('dgtejidos','DgtejidoController');

Route::resource('dglavados','DglavadoController');

Route::resource('dgtumblers','DgtumblerController');

Route::resource('dgrepelentes','DgrepelenteController');

Route::resource('dgbackings','DgbackingController');

Route::resource('dgtermofijados','DgtermofijadoController');

Route::resource('dgpunzonados','DgpunzonadoController');

Route::resource('dgbondeos','DgbondeoController');



/*
|------------------------------------------------------------------------------
|                               P r o c e s o s                               |
|------------------------------------------------------------------------------
*/


Route::resource('procesotejidos','ProcesotejidoController');

Route::resource('procesolavados','ProcesolavadoController');

Route::resource('procesotumblers','ProcesotumblerController');

Route::resource('procesorepelentes','ProcesorepelenteController');

Route::resource('procesobackings','ProcesobackingController');

Route::resource('procesotermofijados','ProcesotermofijadoController');

Route::resource('procesopunzonados','ProcesopunzonadoController');

Route::resource('procesobondeos','ProcesobondeoController');




/*
|------------------------------------------------------------------------------
|                    R e      -        P r o c e s o s                        |
|------------------------------------------------------------------------------
*/


Route::resource('reprocesotejidos','ReprocesotejidoController');

Route::resource('reprocesolavados','ReprocesolavadoController');

Route::resource('reprocesotumblers','ReprocesotumblerController');

Route::resource('reprocesorepelentes','ReprocesorepelenteController');

Route::resource('reprocesobackings','ReprocesobackingController');

Route::resource('reprocesotermofijados','ReprocesotermofijadoController');

Route::resource('reprocesopunzonados','ReprocesopunzonadoController');

Route::resource('reprocesobondeos','ReprocesobondeoController');

















 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
