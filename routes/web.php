<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\Controle;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/github/redirect',[authcontroller::class, 'githubredirect']);
Route::get('/auth/github/callback',[authcontroller::class, 'githubcallback']);
Route::get('/cadastrar', function () { return view('cadastro');});
Route::post('/cadastro', [Controle::class, 'cadastro']);

