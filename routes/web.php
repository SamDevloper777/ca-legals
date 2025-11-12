<?php

use App\Livewire\Page\Contact;
use App\Livewire\Page\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/about', \App\Livewire\Page\About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');