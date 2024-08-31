<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\cars;
use App\Models\categoryes;

class mainController extends Controller {
    // Функция показа всех машин
    public function allCars() {
        // Выборка из таблиц
        $cars = cars::paginate(20);
        $categoryes = categoryes::all();

        // Переадрессация
        return view("main", ["cars" => $cars, "categoryes" => $categoryes]);
    }

    // Функция отображения страницы с правилами
    public function rentRules() {
        // Выборка из таблиц
        $categoryes = categoryes::all();

        // Переадрессация
        return view("rental_rules", ["categoryes" => $categoryes]);
    }

    // Функция отображения страницы о нас
    public function aboutUs() {
        // Выборка из таблиц
        $categoryes = categoryes::all();

        // Переадрессация
        return view("about_us", ["categoryes" => $categoryes]);
    }
}
