<?php

use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', function () {

    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/notifications', function () {

    // dd(env('MAIL_FROM_ADDRESS'));
    $when = now()->addMinutes(10);

    $user = User::first();
    // $user->notify(new InvoicePaid());
    $user->notify((new InvoicePaid())->delay($when));

    dd('notifications');
});
