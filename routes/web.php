<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
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
    return redirect(route('home'));
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::group(['middleware' => ['guest']], function () {

Route::post('/sign-up', [ParticipantController::class, 'store'])->name('sign-up');

});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/participants', function(){
        return view('pages.participants');
    })->name('participants');

    Route::get('/participants-list', [ParticipantController::class, 'participantsList'])->name('participants.list');
    Route::get('/export-participants', [ParticipantController::class, 'participantsExport'])->name('export.participants');
    Route::get('/participants-list/{filter}', [ParticipantController::class, 'participantsList']);

});