<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\carController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'allCars'])->name("main");

// Отслеживание страницы c категорией машин
Route::get('/{category}', [categoryController::class, 'categoryCars'])->name("category_cars");

// Отслеживание страницы с информацией о машине
Route::get('/car/{id}', [carController::class, 'infoCar'])->name("car_info");