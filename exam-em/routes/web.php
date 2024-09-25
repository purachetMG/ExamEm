<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

route::get('/', [UserController::class,'index'])->name('index');

route::prefix('user')->group(function() {
    route::get('create',[UserController::class,'create'])->name('user.create');
    route::post('insert', [UserController::class , 'insert'])->name('user.insert');
    route::get('edit/{id}',[UserController::class,'edit'])->name('user.edit');
    route::post('update/{id}',[UserController::class,'update'])->name('user.update');
    route::delete('delete/{id}',[UserController::class,'delete'])->name('user.delete');
});

route::prefix('test')->group(function(){
    route::get('index/{id}',[TestController::class,'index'])->name('test.index');
    route::get('sub-test/{id}',[TestController::class,'subTest'])->name('sub_test');
    route::post('answer/{id}',[TestController::class,'answer'])->name('test.answer');
});