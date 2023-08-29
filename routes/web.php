<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller as controller;
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

Route::get('/',[controller::class,'list'])->name('list');


Route::get('home',[controller::class,'list']);

Route::get('libros',[controller::class,'indexl'])->name('librosview');

Route::get('list',[controller::class,'list'])->name('list');

Route::get('add',[controller::class, 'add']);

Route::post('store', [controller::class, 'store']);

Route::get('delete{id}',[controller::class,'delete'])->name('remove');

Route::get('destroy{id}',[controller::class,'deleteC'])->name('destroy');

Route::get('edit{id}',[controller::class,'edit'])->name('edit');

Route::put('update{id}',[controller::class,'update'])->name('update');

Route::get('categorias',[controller::class,'indexg'])->name('categoriasview');

Route::post('storeC', [controller::class, 'storeC']);

Route::get('addC', [controller::class,'addC']);

Route::get('modify{id}', [controller::class,'editc'])->name('modify');

Route::put('show{id}',[controller::class,'updatec'])->name('show');

Route::get('excel',[controller::class,'excel']);

Route::get('search',[controller::class,'search'])->name('items');

Route::get('buscar',[controller::class,'buscar'])->name('buscar');


//Route::get("/ver", [Controller::class,'ver']);



