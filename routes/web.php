<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllername;

use App\Http\Controllers\studentcontroller; 

use App\Http\Controllers\buscontroller;

use App\Http\Controllers\bookcontroller;



Route::get("/",[controllername::class,'create']);

Route::get("/student",[studentcontroller::class,'create']);

Route::get("/busadd",[buscontroller::class,'create']);

Route::get("/book",[bookcontroller::class,'create']);

Route::post("/facultyread",[controllername::class,'store']);

Route::post("/studentread",[studentcontroller::class,'store']);

Route::post("/busread",[buscontroller::class,'store']);

Route::post("/bookread",[bookcontroller::class,'store']);

