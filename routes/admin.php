<?php

use App\Http\Livewire\Admin\Pages\AboutUs;
use App\Http\Livewire\Admin\Pages\AddAdmin;
use App\Http\Livewire\Admin\Pages\Admins;
use App\Http\Livewire\Admin\Pages\ClientDetails;
use App\Http\Livewire\Admin\Pages\Clients;
use App\Http\Livewire\Admin\Pages\ContactUs;
use App\Http\Livewire\Admin\Pages\Dashboard;
use App\Http\Livewire\Admin\Pages\Documents;
use App\Http\Livewire\Admin\Pages\Domains;
use App\Http\Livewire\Admin\Pages\Login;
use App\Http\Livewire\Admin\Pages\Orders;
use App\Http\Livewire\Admin\Pages\Profile;
use App\Http\Livewire\Admin\Pages\TermsConditions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/', Login::class)->name('login');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/profile', Profile::class)->name('profile');

    Route::get('/orders', Orders::class)->name('orders');
    Route::get('/documents', Documents::class)->name('documents');
    Route::get('/domains', Domains::class)->name('domains');

    Route::get('/about-us', AboutUs::class)->name('about-us');
    Route::get('/terms-conditions', TermsConditions::class)->name('terms-conditions');

    Route::get('/clients', Clients::class)->name('clients');
    Route::get('/clients/{client}', ClientDetails::class)->name('clients.details');
    Route::get('/admins', Admins::class)->name('admins');
    Route::get('/admins/create', AddAdmin::class)->name('admins.create');
    /* Route::get('admins/view/{admin}', AddAdmin::class)->name('admins.view'); */

    Route::get('/contacts', ContactUs::class)->name('contacts');

    Route::get('logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
