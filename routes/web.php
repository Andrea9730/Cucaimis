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

//Route::get('/donacion_1', 'Donacion_1Controller@index');

//Route::get('/donacion_1/create', 'Donacion_1Controller@create');


Route::resource('donacion_1', 'Donacion_1Controller');


