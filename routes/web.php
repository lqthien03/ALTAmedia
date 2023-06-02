<?php
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
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
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    

Route::get('/device',[DeviceController::class,'show'])->name('device.device');
Route::get('/device/detail',[DeviceController::class,'Detail_Device'])->name('device.detail_device');

// Route::get('/detail', function () {
//     return view('device.detail_device', ['title' => 'detail']);
// })->name('detail_device');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');


Route::get('/service',[ServiceController::class,'show'])->name('dichvu.service');
Route::get('/service/detail',[ServiceController::class,'Detail_Service'])->name('dichvu.detail_service');
// Route::get('/service/update',[App\Http\Controllers\ServiceController::class,''])->name('dichvu.update_service');
Route::get('/update', function () {
    return view('device.update_device', ['title' => 'update']);
})->name('update_device');



//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


