<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллера
use App\Http\Controllers\mainController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\carController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\adminController;

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

// Отслеживание страниц админ панели
Route::get('/login_admin', [adminController::class, 'loginAdmin'])->name("login_admin");
Route::post('/login_admin', [adminController::class, 'loginAdminForm'])->name("login_admin_form");

Route::get('/admin_orders', [adminController::class, 'ordersAdmin'])->name("orders");
Route::get('/order_info/{id}', [adminController::class, 'orderInfo'])->name("order_info");
Route::get('/products', [adminController::class, 'products'])->name("products");
Route::get('/add_product', [adminController::class, 'showAddProduct'])->name("add_product_form");
Route::post('/add_product', [adminController::class, 'addProduct'])->name("add_product");
Route::get('/edit_product/{id}', [adminController::class, 'showEditProduct'])->name("edit_product_form");
Route::post('/edit_product/{id}', [adminController::class, 'editProduct'])->name("edit_product");
Route::get('/delete_product/{id}', [adminController::class, 'deleteProduct'])->name("delete_product");