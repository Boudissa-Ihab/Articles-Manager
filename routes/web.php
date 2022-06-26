<?php

use App\Http\Livewire\Client\AboutUs;
use App\Http\Livewire\Client\AuthorDetails;
use App\Http\Livewire\Client\Authors;
use App\Http\Livewire\Client\ContactUs;
use App\Http\Livewire\Client\DocumentDetails;
use App\Http\Livewire\Client\Documents;
use App\Http\Livewire\Client\DomainDetails;
use App\Http\Livewire\Client\Domains;
use App\Http\Livewire\Client\Editor;
use App\Http\Livewire\Client\Home;
use App\Http\Livewire\Client\NotFound;
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

Route::get('/', Home::class)->name('home');
Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/about-us', AboutUs::class)->name('about-us');

Route::get('/infos/{editor}', function($editor){
    switch($editor) {
        case "association":
            return app()->call(Editor::class, ['editor' => 'association']);
        break;
        case "organization":
            return app()->call(Editor::class, ['editor' => 'organization']);
        break;
        case "terms-and-conditions":
            return app()->call(Editor::class, ['editor' => 'terms-and-conditions']);
        break;
        case "privacy-policy":
            return app()->call(Editor::class, ['editor' => 'privacy-policy']);
        break;
    }
})->name('editor');

Route::get('/authors', Authors::class)->name('authors');
Route::get('/authors/{author}', AuthorDetails::class)->name('authors.author');

Route::get('/documents', Documents::class)->name('documents');
Route::get('/documents/{document}', DocumentDetails::class)->name('documents.document-details');

Route::get('/domains', Domains::class)->name('domains');
Route::get('/domains/{domain}', DomainDetails::class)->name('domains.domain');

Route::get('/not-found', NotFound::class)->name('not-found');
