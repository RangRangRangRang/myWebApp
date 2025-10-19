<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});
// USER STORY 4: Route
Route::resource('videos', VideoController::class);

