<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
// Подключение моделей
use App\Models\orders;
use App\Models\cars;
use App\Models\categoryes;
// Подключение модулей 
use App\Http\Requests\productRequest;
use App\Http\Requests\addproductRequest;

class adminController extends Controller {
    // Функция показа содержимого
    public function ordersAdmin() {
        // Объявление переменной с данными их таблицы
        $orders = Orders::orderBy("id", "desc")->paginate(25);

        // Передача данных в шаблон
        return view("orders_admin", ["orders" => $orders]);
    }
    
    // Функция отображения информации о заказе
    public function orderInfo($id) {
        // Выборка из таблицы
        $orders = orders::find($id);

        // Вывод информации в шаблон
        return view("order_info", ["order" => $orders]);
    }
}