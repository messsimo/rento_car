<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;
use App\Http\Controllers\categoryController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'allCars'])->name("main");

// Отслеживание страницы c категорией машин
Route::get('/{category}', [CategoryController::class, 'categoryCars'])->name("category_cars");