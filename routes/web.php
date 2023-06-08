<?php
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressionController;
use Illuminate\Support\Facades\Route;
use Khill\Lavacharts\Lavacharts;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


////// DeviceController
Route::controller(DeviceController::class)->group(function(){
    Route::get('/device','ShowDevice')->name('device.device');
    Route::get('/device/detail/{id}', 'Detail_Device')->name('device.detail_device'); 
    Route::get('/device/add','AddDevice')->name('device.add');
    Route::post('device/store','StoreDevice')->name('service.store');
    Route::get('/device/edit/{id}', 'EditDevice')->name('device.edit');
    Route::post('/device/update', 'UpdateEDevice')->name('device.update');
    });

//////////ProgressionController

Route::get('/progression',[ProgressionController::class,'ShowProgression'])->name('progression.progression');

///////////ServiceController
Route::get('/service',[ServiceController::class,'show'])->name('dichvu.service');
Route::get('/service/detail',[ServiceController::class,'Detail_Service'])->name('dichvu.detail_service');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');

// service
Route::get('/service',[ServiceController::class,'show'])->name('dichvu.service');
Route::get('/service/detail',[ServiceController::class,'Detail_Service'])->name('dichvu.detail_service');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');
// Route::controller(DeviceController::class)->group(function(){
//     Route::get('service','show')->name('dichvu.service');
//     Route::get('/service/detail','detail_service')->name('dichvu.detail_service');
//     Route::get('/service/update','update_service')->name('dichvu_service');
//     Route::post('/service/update');
// });

//report
Route::get('/report',function(){
    return view('report.report');
});
// Route::controller(ReportController::class)->group(function(){
//     Route::get('/report',function(){
//         return view('report.report');
//     });
// });


//profile

require __DIR__.'/auth.php';


