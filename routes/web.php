<?php

use App\Http\Livewire\Admin\ForgetPassword;
use App\Http\Livewire\Admin\Login;
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

Route::get('/', Login::class)->name('login');
Route::get('/forgot-password', ForgetPassword::class)->name('password.reset');
