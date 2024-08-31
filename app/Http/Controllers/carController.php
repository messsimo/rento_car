<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\cars;
use App\Models\categoryes;

class carController extends Controller {
    // Функция отображения информации о машине по id
    public function infoCar($id) {
        // Фильтрация данных по категории и использование пагинации
        $cars = cars::find($id);
        $categoryes = categoryes::all();
        
        // Переадресация на страницу с выводом машин по категории
        return view("car", ["cars" => $cars, "categoryes" => $categoryes]);
    }
}
