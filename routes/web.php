<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;


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
    return view('index');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/nuestras-unidades', function () {
    return view('unidades');
})->name('unidades');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/covid-19', function () {
    return view('covid');
})->name('covid');

Route::get('/politicas-de-reservas', function () {
    return view('politicas');
})->name('politicas');

// Route::get('/contactanos', function () {
//     return view('contact');
// })->name('contactanos');

Route::get('/contactanos', [ContactanosController::class,'index'] )->name('contactanos');
Route::post('/contactanos', [ContactanosController::class,'store'])->name('contactanos.enviar');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
