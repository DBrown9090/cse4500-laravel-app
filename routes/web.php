<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CalendarController;

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

Route::resource('/todos', TodoController::class);

Route::resource('/calendar', CalendarController::class);

Route::get('/db-test', function() {
    try {
        \DB::connection()->getPDO();
        $db_name = \DB::connection()->getDatabaseName();
        echo 'Database Connected: '.$db_name;
    } catch (\Exception $e) {
        echo 'None';
    }
});

Route::get('/db-migrate', function() {
   Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/{name}', function () {
    return view('welcome');
})->where('name', '|home');

/*Route::get('/todos', function () {
    return view('todos');
});

Route::get('/calendar', function () {
    return view('calendar');
});*/

Route::get('/board', function () {
    return view('board');
});

Route::get('/events-feed', function() {
    return redirect()->action([CalendarController::class, 'show']);
    /*return response()->json([[
        "title"=> "CSE4500 Class",
        "start"=> "2022-02-23T17:30:00",
        "end"=> "2022-02-23T18:45:00"
      ],
      [
        "title"=> "CSE4500 Class",
        "start"=> "2022-02-28T17:30:00",
        "end"=> "2022-02-28T18:45:00"
      ]]);*/
});

Route::fallback(function() {
    return view('unknown');
});
