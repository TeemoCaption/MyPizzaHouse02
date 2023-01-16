<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){  // url: localhost:8000/pizzas
        //$pizzas = Pizza::orderBy('price')->get();  //價格由小到大排序
        //$pizzas = Pizza::orderBy('price','desc')->get();  //價格由大到小排序
        //$pizzas = Pizza::where('type','大阪燒披薩')->get(); //查詢符合的資料
        $pizzas = Pizza::latest()->get();  //回傳一個查詢對象，並將查詢條件限制為取得資料表中最新的記錄
        $name = request('name');
        return view('pizzas.index',['pizzas'=> $pizzas,'name'=>$name]);
    }

    public function show($id){  // url: localhost:8000/pizzas/{id}
        return view('pizzas.show',['id'=> $id]);
    }

    public function create(){  // 訂購披薩
        return view('pizzas.create');
    }

    public function store(){  //儲存訂單資訊
        $pizza = new Pizza();  //建立類別物件
        $pizza->name = request('name');  //請求表單的name
        $pizza->type = request('type');  //請求表單的type
        $pizza->base = request('base');  //請求表單的base
        $pizza->save();  //儲存資料

        return redirect('/')->with('message','感謝您的購買!!!'); //重定向到首頁
    }

    public function destroy($id){  //儲存訂單資訊
        //findOrFail(): 查詢單筆資料，如果找到了符合條件的資料，則會回傳一個Eloquent模型的實例
        //否則，將會拋出 ModelNotFoundException 的錯誤
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();  //刪除資料

        return redirect('/pizzas'); //重定向到首頁
    }

    public function edit($id){  //修改訂單頁
        $pizza = Pizza::findOrFail($id);  //查詢一筆資料
        return view('pizzas.edit',['pizza'=>$pizza]);
    }

    public function update($id){  //更新訂單
        $pizza = Pizza::findOrFail($id);  //查詢一筆資料
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();  //儲存資料

        return redirect('/pizzas'); //重定向到首頁
    }
}
