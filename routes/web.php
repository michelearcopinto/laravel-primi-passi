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

    $data = [
        [
            'name' => 'Fabio'
        ],
        [
            'name' => 'Mario'
        ],
        [
            'name' => 'Sara'
        ],
        [
            'name' => 'Alex'
        ],
    ];

    $hi = 'Hello World';

    return view('home', compact('data', 'hi'));
});

Route::get('/about', function () {

    $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aut excepturi deleniti cupiditate deserunt sint reprehenderit quibusdam tempore voluptas quis, nisi id voluptatibus quaerat repellat doloremque eum eos laborum eaque.';

    return view('about', compact('lorem'));
});
