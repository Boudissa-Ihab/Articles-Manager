<?php

use App\Http\Livewire\Admin\AboutUs;
use App\Http\Livewire\Admin\AddAdmin;
use App\Http\Livewire\Admin\AddAuthor;
use App\Http\Livewire\Admin\AddDocument;
use App\Http\Livewire\Admin\Admins;
use App\Http\Livewire\Admin\Authors;
use App\Http\Livewire\Admin\ClientDetails;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\ContactUs;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Documents;
use App\Http\Livewire\Admin\Domains;
use App\Http\Livewire\Admin\EditAuthor;
use App\Http\Livewire\Admin\EditDocument;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Orders;
use App\Http\Livewire\Admin\PrivacyPolicy;
use App\Http\Livewire\Admin\Profile;
use App\Http\Livewire\Admin\Settings;
use App\Http\Livewire\Admin\Slider;
use App\Http\Livewire\Admin\TermsConditions;
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

Route::get('/', Login::class)->name('admin.login');

Route::middleware(['auth:admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/profile', Profile::class)->name('profile');

    Route::get('/orders', Orders::class)->name('orders');
    Route::get('/documents', Documents::class)->name('documents');
    Route::get('/documents/new-document', AddDocument::class)->name('new-document');
    Route::get('/documents/edit-document/{document}', EditDocument::class)->name('edit-document');
    Route::get('/domains', Domains::class)->name('domains');

    Route::get('/authors', Authors::class)->name('authors');
    Route::get('/authors/new-author', AddAuthor::class)->name('new-author');
    Route::get('/authors/edit-author/{author}', EditAuthor::class)->name('edit-author');

    Route::get('/about-us', AboutUs::class)->name('about-us');
    Route::get('/terms-conditions', TermsConditions::class)->name('terms-conditions');
    Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
    Route::get('/settings', Settings::class)->name('settings');

    Route::get('/clients', Clients::class)->name('clients');
    Route::get('/clients/{client}', ClientDetails::class)->name('clients.details');
    Route::get('/admins', Admins::class)->name('admins');
    Route::get('/admins/create', AddAdmin::class)->name('admins.create');

    Route::get('/slider', Slider::class)->name('slider');
    Route::get('/contacts', ContactUs::class)->name('contacts');

    Route::get('logout',function(){
        Auth::logout();
        return redirect()->route('admin.login');
    })->name('logout');
});
