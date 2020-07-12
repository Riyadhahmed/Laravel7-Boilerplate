<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Frontend',
    'as' => 'frontend.'],
    function () {
        require base_path('routes/frontend/frontend.php');
    });


// Bakcend


// Admin Auth
Route::prefix('admin_login')->group(function () {
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
    Route::get('logout', 'Auth\Admin\LoginController@logout');
});

// Admin Dashborad
Route::group([
    'namespace' => 'Backend\Admin',
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth:admin'],
    function () {
        require base_path('routes/backend/admin.php');
    });

// clear config and cache
//['cache:clear', 'optimize', 'route:cache', 'route:clear', 'view:clear', 'config:cache']

//    /artisan/cache-clear  // replace (:) to (-)
//Route::get('/artisan/{cmd}', function($cmd) {
//   $cmd = trim(str_replace("-",":", $cmd));
//   $validCommands = ['cache:clear', 'optimize', 'route:cache', 'route:clear', 'view:clear', 'config:cache'];
//   if (in_array($cmd, $validCommands)) {
//      Artisan::call($cmd);
//      return "<h1>Ran Artisan command: {$cmd}</h1>";
//   } else {
//      return "<h1>Not valid Artisan command</h1>";
//   }
//});

