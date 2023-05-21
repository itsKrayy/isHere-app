<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QRScannerController;
use App\Http\Controllers\GenerateQRController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\AttendanceLogsController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Route::get('/', function () {
    //     dd(\App\Models\User::all());
    //     return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    // });

    Route::get('/attendee', function () {
        return view('attendee');
    });

    Route::get('/', [MainController::class, 'index'])->name('tenant.index');
    Route::get('/login' , [SessionController::class ,'index'])->name('tenant.login');
    Route::get('/logout', [AccountController::class, 'logout']);
    Route::post('/login' , [SessionController::class ,'create'])->name('tenant.create');
    Route::get('/register' , [SessionController::class ,'register'])->name('tenant.register');
    Route::post('/register' , [SessionController::class ,'store'])->name('tenant.store');

    Route::resource('/menu', AccountController::class);
    Route::resource('/events', EventsController::class);
    Route::get('/events/event/{event_id}', [EventsController::class, 'show']);
    Route::resource('/reports', ReportsController::class);
    Route::get('/buyreport', [AccountSettingController::class, 'buyReport']);
    Route::get('/cancelsub', [AccountSettingController::class, 'cancelSub']);
    Route::resource('/settings', AccountSettingController::class);
    Route::resource('/generate-qr', GenerateQRController::class);
    Route::get('/attendance/addlog/{id}', [AttendanceLogsController::class, 'addLog']);
    Route::resource('/attendance', AttendanceLogsController::class);
    Route::resource('/scan-qr', QRScannerController::class);
    Route::post('/scan-qr', [QRScannerController::class, 'scan']);
    // web.php
    Route::get('/events/{event_id}/pdf', [EventsController::class, 'generatePdf']);
});
