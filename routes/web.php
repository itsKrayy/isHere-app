<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\AttendanceLogsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GenerateQRController;
use App\Http\Controllers\QRScannerController;
use App\Http\Controllers\ReportsController;
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

Route::get('/', function() {
    return redirect('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/attendee', function () {
    return view('attendee');
});

Route::resource('/menu', AccountController::class);
Route::resource('/events', EventsController::class);
Route::get('/events/event/{event_id}', [EventsController::class, 'show']);
Route::resource('/reports', ReportsController::class);
Route::resource('/settings', AccountSettingController::class);
Route::resource('/generate-qr', GenerateQRController::class);
Route::get('/attendance/addlog/{id}', [AttendanceLogsController::class, 'addLog']);
Route::resource('/attendance', AttendanceLogsController::class);
Route::resource('/scan-qr', QRScannerController::class);
Route::post('/scan-qr', [QRScannerController::class, 'scan']);
// web.php
Route::get('/events/{event_id}/pdf', [EventsController::class, 'generatePdf']);

