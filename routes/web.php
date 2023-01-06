<?php

use App\Http\Controllers\PagesController;
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

<<<<<<< HEAD

Route::get('/', [PagesController::class, 'index']);

Route::get('/login', [PagesController::class, 'login']);

Route::get('/dashboard', [PagesController::class, 'dashboard']);
=======
Route::get('/', function () {
    return view('homepage');
});
>>>>>>> 8df8ad7453812f3e94bbc18f3cbec72bdd8cd81f
