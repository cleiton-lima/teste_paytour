<?php

use App\Http\Controllers\CurriculoController;
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
    return view('form_curriculo');
});

Route::name('web.curriculo.')->prefix('curriculo')->group(function() {
    Route::resource('', CurriculoController::class);
});

// Route::get('enviarEmail', [EmailController::class, 'envioEmail']);
