<?php

use App\Http\Livewire\Admin\Pages\Dashboard;
use App\Http\Livewire\Admin\Pages\Documents;
use App\Http\Livewire\Admin\Pages\ForgetPassword;
use App\Http\Livewire\Admin\Pages\Login;
use App\Http\Livewire\Admin\Pages\ResetPassword;
use Illuminate\Support\Facades\Auth;
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
Route::get('/forgot-password', ForgetPassword::class)->name('password.request');
Route::get('/reset-password', ResetPassword::class)->name('password.reset');

/* Route::middleware('auth')->group(function () { */
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::get('documents', Documents::class)->name('documents');

    Route::get('logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
/* }); */
