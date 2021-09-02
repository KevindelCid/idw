<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ConsultasController;
use Carbon\Carbon;

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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/consulta_nueva', function () {
    return view('welcome');
});
Route::get('/juridico', function () {
    return view('juridico/index');
});
Route::get('/juridico/nuevo', function () {
    return view('juridico/nuevo');
});


Route::get('/clientes/perfil/{id}', function () {
    return view('clientes/perfil_cliente');
});





Route::get('/Xconsulta', function () {
    return view('razon_consulta');
});

Route::get('consultas/pendientes', function () {
    return view('consultas/pendientes');
});

Route::get('/clientes/nuevo_cliente', 'ClientesController@vista');
Route::post('/clientes/nuevo_cliente', 'ClientesController@create');
Route::get('/clientes/perfil_cliente/{id}', 'ClientesController@index');

Route::get('/juridico/nuevo', 'JuridicoController@index')->name('juridico.nuevo');



Auth::routes();

Route::get('/home/{id}', 'HomeController@index')->name('home');

Route::get('/Xconsulta/{id}/{tipo}', 'ConsultasController@vista');
Route::post('/Xconsulta/{id}/{tipo}', 'ConsultasController@create');

Route::get('/consultas/pendientes', 'ConsultasController@vistacp');
Route::get('/clientes/listado', 'ClientesController@vistacli');
Route::get('/consultas/consultas_de/{id}', 'ClientesController@vistaconsultasde');

Route::get('/agenda', 'AgendaController@index')->name('agenda.index')->middleware('auth');

Route::post('/agenda/guardar', 'AgendaController@guardar');
// Route::post('/agenda/caca/{id}','AgendaController@eventito');


































Route::post('/agenda/eventito', 'AgendaController@eventito');














// Route::post('/agenda/buscar', 'AgendaController@buscar');


Route::get('/agenda/listar', 'AgendaController@listar');