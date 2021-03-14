<?php





use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Donacion1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServ iceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('lista_ablacionista',[Donacion1Controller::class, 'mostrar']);

//Route::get('/donacion', 'Donacion1Controller@index');

//Route::get('/donacion/nuevo_proceso', 'Donacion1Controller@create');


Route::resource('donacion1', 'donacion1Controller');

Route::get('/donacion/editar', function () {
    return view('Donacion_1.edit');
});
Route::get('/valoracion/nueva_val', function () {
    return view('Valoracion.create');
});
