<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\cars;

class mainController extends Controller {
    // Функция показа всех машин
    public function allCars() {
        // Подключение к таблице `cars`
        $cars = new cars();

        // Переадрессация
        return view("main", ["cars" => $cars->all()]);
    }
}
