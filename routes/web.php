<?php

use App\Livewire\Admin\Service\ServiceList;
use App\Livewire\Page\Contact;
use App\Livewire\Page\Home;
use App\Livewire\Page\ServiceView;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/about', \App\Livewire\Page\About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/service/{slug}',ServiceView::class)->name('service.view');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',ServiceList::class)->name('service.list');
});
