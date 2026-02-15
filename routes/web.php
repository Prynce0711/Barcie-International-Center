<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/GuestDashboard', 'Components.Dashboard.GuestDashboard')->name('GuestDashboard');
