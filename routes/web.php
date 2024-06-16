<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\CitasController;
use App\Http\Controllers\AppointmentController;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', HomeController::class);

route::get('/posts',[PostController::class, 'index'] );
route::get('/posts/about', [PostController::class,'about'] );
route::get('/posts/contacto', [PostController::class,'contacto'] );
Route::get('/citas', [AppointmentController::class, 'index'])->name('citas.index');
Route::post('/citas/store', [AppointmentController::class, 'store'])->name('citas.store');



Route::get('/index', [ServiciosController::class, 'index']);




//Route::get('/citas', function () {
 //   return view('posts.citas');
//});



route::get('/posts/{post}/{agendar?}', function ($post,$category = null) {

    return "Daily/{$post}";
});
