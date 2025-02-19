<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $data = [
        's1' => 'amy',
        's2' => 'bob',
        's3' => 'cat',
    ];

    // $data = asset('assets/css');
    // $data = 'http://localhost/';

    $data = env('MY_PWD');
    // dd($data);

    // return view('welcome');
    return redirect()->route('cars.index');
});

Route::get('/kai', function () {
    // $data = redirect()->route('foods');
    // dd($data);
    return redirect()->route('foods.index');
});

Route::get('/test', function () {
    return redirect()->route('foods.index');
});



Route::get('/foods', function () {
    return view('food.index');
})->name('foods.index');

Route::get('/foods/f1', function () {
    return view('food.f1');
})->name('foods.f1');


// cars

Route::get('/cars', function () {
    return view('car.index');
})->name('cars.index');

Route::get('/cars/create', function () {
    return view('car.create');
})->name('cars.create');


Route::get('/cars/update', function () {
    return view('car.update');
})->name('cars.update');


Route::get('/cars/del', function () {
    return view('car.del');
})->name('cars.del');


Route::resource('cars', CarController::class);


// cars