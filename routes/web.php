<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\UserControler;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return 'hello dunia tipu tipu';

});

Route::get('/test2', function(){
    return 'hello dunia dengan penuh tipuan';

});

Route::redirect('/test','/test2');

Route::view('/greeting', 'greeting', ['name' => 'baboy']);

Route::get('/user/{id}', function($id){
    return "user ".$id;
})->where('id', '[0-9]-');

Route::get('/user/profile',function(){
    return "Ini Profile";
})->name('profile');


Route::get('/hello/{name}', [UserControler::class,'show']);

Route::get('/fullname', function(){
    $user = User::first();
    return view('greeting', compact('user'));
});

Route ::get('/daftarbuku/{id}', [bookController::class, 'show'])->name('book.show');
