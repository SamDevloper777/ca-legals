<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Service\ServiceList;
use App\Livewire\Contact\ContactList;
use App\Livewire\Page\Contact;
use App\Livewire\Page\Home;
use App\Livewire\Page\ServiceView;
use App\Livewire\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::post('/logout', function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');



Route::get('/',Home::class)->name('home');
Route::get('/about', \App\Livewire\Page\About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/login', Login::class)->name('login');
Route::get('/service/{slug}',ServiceView::class)->name('service.view');


Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('event:clear');
    Artisan::call('clear-compiled');

    return '<h3> All caches cleared successfully!</h3>';
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/services',ServiceList::class)->name('service.list');
    Route::get('/contacts', ContactList::class)->name('contact.list');  
});
