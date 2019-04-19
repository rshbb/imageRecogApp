<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
Route::get('/',"main@login");
Route::get('/signup',"main@signup");


Route::post("/auth","crud@auth");
Route::post("/reg","crud@register");
