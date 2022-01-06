<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRedirectController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


/* 
    This route will let the controller to check the role of the user. According to the role ,the controller will return different dashboard.
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserRedirectController::class,'checkUserType'])->name('dashboard');
