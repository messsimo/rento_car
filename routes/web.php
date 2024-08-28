<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;

// Отслеживание главной страницы
Route::get('/', [mainController::class, 'allCars'])->name("main");