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


///////////////////////////////////
Route::get('/device',[DeviceController::class,'ShowDevice'])->name('device.device');
Route::get('/device/detail',[DeviceController::class,'Detail_Device'])->name('device.detail_device');

// Route::get('/detail', function () {
//     return view('device.detail_device', ['title' => 'detail']);
// })->name('detail_device');
Route::get('/device/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');
Route::get('/device/create_device',[DeviceController::class,'CreateDevice'])->name('device.create_device');
Route::post('device/store',[DeviceController::class],'StoreDevice')->name('service.store');
//////////////////////////////////////

Route::get('/progression',[ProgressionController::class,'ShowProgression'])->name('progression.progression');


Route::get('/service',[ServiceController::class,'show'])->name('dichvu.service');
Route::get('/service/detail',[ServiceController::class,'Detail_Service'])->name('dichvu.detail_service');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');

// service
Route::get('/service',[ServiceController::class,'show'])->name('dichvu.service');
Route::get('/service/detail',[ServiceController::class,'Detail_Service'])->name('dichvu.detail_service');
// Route::get('/service/update',[App\Http\Controllers\ServiceController::class,''])->name('dichvu.update_service');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');


//report
Route::get('/report',function(){
    return view('report.report');
});


//profile

require __DIR__.'/auth.php';


