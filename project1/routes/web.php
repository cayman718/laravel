<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    //建立$data
    $data = [
        's1' => 'ak',
        's2' => 'mi',
        's3' => 'qw',
    ];
    return view('index', ['data' => $data]);
    // echo 'hello';
});

Route::get('f1', function () {
    $message = "這是從後端傳到 f1 頁面的訊息";
    return view('f1', ['message' => $message]);
    // echo 'hello';
});

Route::get('/user/{id}', function (string $id) {
    // return view('f1');
    // echo 'hello';
    dd($id);
    return view('index', ['data' => $id]);
});