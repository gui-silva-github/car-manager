<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\EditCar;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/page', TestPage::class);

Route::get('/cars', CarList::class);

Route::get('/add/new', AddCar::class);

Route::get('/edit/car/{id}', EditCar::class);   
