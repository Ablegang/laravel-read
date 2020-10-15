<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/su', function () {
    return '';
});

Route::get('menu', function () {
    dd(DB::table('admin_menu')->latest()->first());
});

Route::get('menu-transaction-1', function () {
    DB::table('admin_menu')->insert([
        'parent_id' => 0,
        'order' => 1,
        'title' => 'ok1',
        'uri' => '/',
    ]);
    return 1;
});

Route::get('menu-transaction-2', function () {
    DB::table('admin_menu')->insert([
        'parent_id' => 0,
        'order' => 1,
        'title' => 'ok2',
        'uri' => '/',
    ]);
    return 3;
});

Route::get('menu-commit', function () {
    $re1 = \Illuminate\Http\Request::create('menu-transaction-1', 'GET');
    $re2 = \Illuminate\Http\Request::create('menu-transaction-2', 'GET');
    DB::transaction(function () use ($re1, $re2) {
        $res1 = Route::dispatch($re1)->getContent();
        if ($res1 != 1) {
            throw new Exception("失败1");
        }
        $res2 = Route::dispatch($re2)->getContent();
        if ($res2 != 1) {
            throw new Exception("失败2");
        }
    });

    dd(1);
});