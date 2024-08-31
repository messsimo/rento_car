<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// Подключение моделей
use App\Models\cars;
use App\Models\categoryes;

class categoryController extends Controller {
    // Функция вывода всех машин по категории
    public function categoryCars($category) {
        // Фильтрация данных по категории и использование пагинации
        $cars = cars::where('category', $category)->paginate(20);
        $categoryes = categoryes::all();
    
        // Переадресация на страницу с выводом машин по категории
        return view("category_car", ["cars" => $cars, "categoryes" => $categoryes, "category" => $category]);
    }
}
