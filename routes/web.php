<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'chatApp'])->name('chatapp');
Route::get('/chat/fetch-recipients', [App\Http\Controllers\ChatController::class, 'fetchRecipients'])->name('fetchRecipients');
Route::get('/chat/fetch-recipient', [App\Http\Controllers\ChatController::class, 'fetchRecipient'])->name('fetchRecipient');
Route::get('/chat/fetch-messages', [App\Http\Controllers\ChatController::class, 'fetchMessages'])->name('fetchMessages');
Route::post('/chat/save-message', [App\Http\Controllers\ChatController::class, 'saveMessage'])->name('saveMessage');