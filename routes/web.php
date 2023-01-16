<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index']);

Route::get('/pizzas/create',[PizzaController::class, 'create']);  //訂購披薩

Route::get('/pizzas/destroy/{id}',[PizzaController::class, 'destroy']);  //刪除訂單資訊

Route::get('/pizzas/edit/{id}',[PizzaController::class, 'edit']);  //修改訂單資訊

Route::put('/pizzas/{id}/update', [PizzaController::class, 'update']); //更新資料

Route::post('/pizzas',[PizzaController::class, 'store']);  //儲存訂單資訊

Route::get('/pizzas/{id}',[PizzaController::class, 'show']);
