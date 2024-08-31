<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\carController;
use App\Http\Controllers\checkoutController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'allCars'])->name("main");

// Отслеживание страницы c категорией машин
Route::get('/category/{category}', [categoryController::class, 'categoryCars'])->name("category_cars");

// Отслеживание страницы с информацией о машине
Route::get('/car/{id}', [carController::class, 'infoCar'])->name("car_info");

// Отслеживание страницу оформления заказа
Route::get('/сheckout/{id}', [checkoutController::class, 'checkout'])->name("checkout");
Route::post('/сheckout/{id}', [checkoutController::class, 'checkoutForm'])->name("checkoutForm");

// Отслеживание второстепенных страниц
Route::get('/rental_rules', [mainController::class, 'rentRules'])->name("rental_rules");
Route::get('/about_us', [mainController::class, 'aboutUs'])->name("about_us");