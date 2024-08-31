<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// Подключение моделей
use App\Models\cars;
use App\Models\categoryes;
use App\Models\orders;
// Подключение модулей
use App\Http\Requests\checkoutRequest;

class checkoutController extends Controller {
    // Функция для отображения формы чекаута
    public function checkout($id) {
        // Выборка из таблицы
        $car = cars::find($id);
        $categoryes = categoryes::all();

        // Передача данных в шаблон
        return view("checkout", ["car" => $car, "categoryes" => $categoryes]);
    }

    // Функция обработки формы
    public function checkoutForm($id, checkoutRequest $req) {
        // Подключение к таблице
        $orders = new orders();
        // Выборка из таблицы
        $categoryes = categoryes::all();
        $car = cars::find($id);

        // Занесение данных в таблицу
        $orders->name = $req->input("name");
        $orders->phone = $req->input("phone");
        $orders->age = $req->input("age");
        $orders->pickup_time = $req->input("pickup_time");
        $orders->car = $req->input("car");
        $orders->price_hour = $req->input("price");

        // Сохранения данных
        $orders->save();

        // Успешная сессия
        Session::put("key", "success");
        // Сообщение сессии
        Session::flash("success", "Reservation has been sent! Expect a call.");

        // Переадрессация
        return view("checkout", ["categoryes" => $categoryes, "car" => $car])->with("success", "Reservation has been sent! Expect a call.");
    }
}
