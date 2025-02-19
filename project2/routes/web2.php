<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('index');
// });

// Route::get('/lin', function () { //get('可自訂義網址')
//     $data = redirect()->route('foods'); //redirect()->route('要重新導向的網址')
//     dd($data);
//     return redirect()->route('money');
// });

// Route::get('/ymfood', function () {
//     //return view('welcome');
// })->name('good-food');

// Route::get('/food', function () {
//     return redirect()->route('good-food');    // 當用戶訪問 /food 時，會被導向到 /good-food
// });



// ******************************//



// Route::get('/redirect', function () { //get('可自訂義網址')
//     return view('test/test');  //view('需要有這個對應檔案,在網頁呈現內容')
// });


// 列表頁
Route::get('/', function () {
    return view('products.index');
})->name('products.index');

// 新增頁
Route::get('/products/create', function () {
    return view('products.create');
})->name('products.create');

// 編輯頁
Route::get('/products/edit', function () {
    return view('products.edit');
})->name('products.edit');

// 詳細頁
Route::get('/products/show', function () {
    return view('products.show');
})->name('products.show');