@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>修改訂單資訊</h1>
    <form action="/pizzas/{{ $pizza->id }}/update" method="POST">
        @csrf
        @method('put')
        <label for="name">訂購人:</label>
        <input type="text" name="name" id="name" value="{{ $pizza->name }}" required>
        <label for="type">選擇口味</label>
        <select name="type" id="type">
            <option>--請選擇口味--</option>
            <option value="夏威夷披薩">夏威夷披薩</option>
            <option value="大阪燒披薩">大阪燒披薩</option>
            <option value="海陸雙拼披薩">海陸雙拼披薩</option>
        </select>
        <label for="base">選擇餡料</label>
        <select name="base" id="base">
            <option>--請選擇一項--</option>
            <option value="鳳梨">鳳梨</option>
            <option value="蘑菇">蘑菇</option>
            <option value="花枝">花枝</option>
        </select>
        <input type="submit" value="送出訂單">
    </form>
</div>
@endsection