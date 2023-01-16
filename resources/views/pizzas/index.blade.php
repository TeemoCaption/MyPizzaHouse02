@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
        <div>
            訂購人：{{ $pizza->name }} - 披薩口味：{{ $pizza->type }} - 餡料：{{ $pizza->base }} 
            <a href="/pizzas/edit/{{ $pizza->id }}">修改資料</a> / <a href="/pizzas/destroy/{{ $pizza->id }}">刪除資料</a>
        </div>
        @endforeach
    </div>
</div>
@endsection