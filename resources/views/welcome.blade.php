@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/pizza-house.png" alt="披薩屋橫幅">
        <div class="title m-b-md">
            披薩屋<br>
            屏東最好的披薩
        </div>
        <p class="msg">{{ session('message') }}</p>   
        <a href="/pizzas/create">點此進入購買頁</a>
    </div>
</div>
@endsection