<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\cars;
use App\Models\categoryes;

class mainController extends Controller {
    // Функция показа всех машин
    public function allCars() {
        // Подключение к таблице `cars`
        $cars = cars::paginate(20);
        $categoryes = categoryes::all();

        // Переадрессация
        return view("main", ["cars" => $cars, "categoryes" => $categoryes]);
    }
}
