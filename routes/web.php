<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::any('/info/save', [App\Http\Controllers\HomeController::class, 'save'])->name('info.save');
Route::any('/membership/ready/{member?}', [App\Http\Controllers\MemberShipReadyController::class, 'index'])->name('membership.ready');
Route::any('/membership/save', [App\Http\Controllers\MemberShipReadyController::class, 'save'])->name('membership.save');
Route::any('/membership/unlocked', [App\Http\Controllers\MemberShipReadyController::class, 'unlocked'])->name('membership.unlocked');

Route::any('/dropzone', [App\Http\Controllers\HomeController::class, 'dropzone'])->name('dropzone');
Route::any('/dropzone/save', [App\Http\Controllers\HomeController::class, 'dropzoneSave'])->name('dropzone.save');
// Route::get('/check-connection', function () {
//     try {
//         DB::connection('mongodb')->getMongoDB();
//         return "Connected to MongoDB!";
//     } catch (\Exception $e) {
//         return "Failed to connect to MongoDB: " . $e->getMessage();
//     }
// });