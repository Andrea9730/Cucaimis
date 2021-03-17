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

Route::get('/donacion1', function () {
    return view('donacion_1.index');
});

Route::get('/donacion1/create', function () {
    return view('donacion_1.create');
});


