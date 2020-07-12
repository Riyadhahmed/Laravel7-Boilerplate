<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Public Api all frontend access
Route::group(['prefix' => 'public', 'as' => 'public.'], function () {
   require base_path('routes/api/public.php');
});