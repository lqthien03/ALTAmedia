<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Models\Progression;
use App\Models\Role;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
// use Khill\Lavacharts\Lavacharts;

// use App\Http\Controller\DeviceController;
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



// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', function () {
    return redirect('login');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'Show'])->middleware(['auth', 'verified'])->name('dashboard');
});
Route::get('/get-statis', [ProgressionController::class, 'statis']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


////// DeviceController
Route::controller(DeviceController::class)->group(function () {
    Route::get('/device', 'ShowDevice')->name('device.device');
    Route::get('/device/detail/{id}', 'Detail_Device')->name('device.detail_device');
    Route::get('/device/add', 'AddDevice')->name('device.add');
    Route::post('device/store', 'StoreDevice')->name('device.store');
    Route::get('/device/edit/{device}', 'EditDevice')->name('device.edit_device');
    Route::put('/device/update/{device}', 'UpdateDevice')->name('device.update');
});

//////////ProgressionController
Route::controller(ProgressionController::class)->group(function () {
    Route::get('/progression', 'ShowProgression')->name('progression.progression');
    Route::get('/progression/detail/{id}', 'Detail_Progression')->name('progression.detail_progression');
    Route::get('/progression/add', 'AddProgression')->name('progression.add_progression');
    Route::post('progression/store', 'StoreProgression')->name('progression.store');
    Route::get('/progression/edit/{id}', 'EditProgression')->name('progression.add');
    Route::post('/progression/update', 'UpdateProgression')->name('progresion.update');
});

///////////ServiceController

Route::controller(ServiceController::class)->group(function () {
    Route::get('/service', 'ShowService')->name('dichvu.service');
    Route::get('/service/detail/{id}', 'Detail_Service')->name('dichvu.detail_service');
    Route::get('/service/add', 'AddService')->name('dichvu.add');
    Route::post('service/store', 'StoreService')->name('dichvu.store');
    Route::get('/service/edit/{service}', 'EditService')->name('dichvu.edit_service');
    Route::put('/service/update/{service}', 'UpdateService')->name('dichvu.update');
});
/////////// ReportController
Route::controller(ReportController::class)->group(function () {
    Route::get('/report', 'ShowReport')->name('report.report');
    Route::get('/export', 'ExportPDF')->name('export');
});


////////// profile
Route::get('/profile', [UserController::class, 'ShowUser'])->name('profile.profile');

//////////////////// setting
Route::get('/manager_role', [SettingController::class, 'ShowSetting_role'])->name('setting.manager_role');
Route::get('/setting/manager_role/add', [SettingController::class, 'AddSetting_role'])->name('setting.add_manager_role');
Route::post('/setting/manager_role/store', [SettingController::class, 'StoreSetting_role'])->name('setting_role.store');
Route::get('/setting/edit_manager_role/{role}', [SettingController::class, 'EditSetting_role'])->name('setting.edit_manager_role');
Route::put('/setting/update_manager_role/{role}', [SettingController::class, 'UpdateSetting_role'])->name('setting.update_role');


//
Route::get('/manager_account', [SettingController::class, 'ShowSetting_account'])->name('setting.manager_account');
Route::get('/setting/manager_account/add', [SettingController::class, 'AddSetting_account'])->name('setting.add_manager_account');
Route::post('/setting/manager_account/store', [SettingController::class, 'StoreSetting_account'])->name('setting_account.store');
Route::get('/setting/edit_manager_account/{user}', [SettingController::class, 'EditSetting_account'])->name('setting.edit_manager_account');
Route::put('/setting/update_manager_account/{user}', [SettingController::class, 'UpdateSetting_account'])->name('setting.update_account');

Route::get('/diary_users', [SettingController::class, 'ShowSetting_diary'])->name('setting.diary_users');

/// exportPDF
// Route::get('/export-pdf',[PdfController::class,'exportPDF']);

require __DIR__ . '/auth.php';
