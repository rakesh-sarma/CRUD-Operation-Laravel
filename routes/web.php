<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\crud;



// for homepage
Route::get('/',[crud::class,'show']);

// for insert
Route::post('/insert',[crud::class,'insert']);

// for show

Route::get('/OnSelect',[crud::class,'OnSelect']);


Route::get('/delete/{id}',[crud::class,'deletedata']);

// data show for edit /edit/

Route::get('/edit/{id}',[crud::class,'editdata']);

// for update
Route::post('/update/{hiddenID}',[crud::class,'updatedata']);

