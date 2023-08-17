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

Route::get('/', function () {
    $sum = 0;

    for ($i = 0; $i < 1000000000; $i++) {
        $sum += $i;
    }

    return view('welcome')->with('sum', $sum);
});
