<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, "home"]);

//TODO В роутенге во всех проектах, как правила не используются функции напрямую, все проводиться через контроллеры
Route::get('/joke', function () {
    return view('pages.about');
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return "ID. " . $id . ". Name: " . $name;
});
