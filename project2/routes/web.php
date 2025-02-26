<?php

use App\Http\Controllers\StudentController;
// use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $data = [
//         's1' => 'amy',
//         's2' => 'bob',
//         's3' => 'cat',
//     ];

//     // $data = asset('assets/css');
//     // $data = 'http://localhost/';

//     $data = env('MY_PWD');
//     dd($data);

// return view('welcome');
// return redirect()->route('student.index');
// });

Route::get('/student', [StudentController::class, 'index']); //要加物件的函式
Route::get('/', function () {
    return view('hw'); // 直接返回視圖
})->name('home'); // 命名路由方便後續使用

// 如果要保留 StudentController 的其他功能
Route::resource('students', StudentController::class); // 改用複數形式