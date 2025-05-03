<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/registropedido', function () {
    return view('registropedido');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/estado_pedido', function () {
    return view('estado_pedido');
});

Route::get('/realizar_pedido', function () {
    return view('realizar_pedido');
});
