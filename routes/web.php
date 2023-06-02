<?php

use App\Http\Controllers\TerminUrl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TerminUrl::class, 'show'])->name('show-termin-url');
Route::post('update-termin-url', [TerminUrl::class, 'updateTerminUrl'])->name('update-termin-url');
