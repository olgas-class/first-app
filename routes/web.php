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
    $username = "Pippo";
    $greeting = "Ciao";
    $likeBlade = false;
    $students = [
        "Pippo",
        "Pluto",
        "Paperino"
    ];

    $data = [
        'username' => $username,
        'greeting' => $greeting,
        'like' => $likeBlade,
        'students' => $students
    ];
    return view('home', $data);
})->name("home");

Route::get('/chi-siamo', function () {
    return view('about');
})->name("about");
