<?php
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressionController;
use App\Models\Progression;
use App\Models\Service;
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
    Route::get('/device/edit/{id}','EditDevice')->name('device.add');
    Route::post('/device/update', 'UpdateEDevice')->name('device.update');
    });

//////////ProgressionController
Route::controller(ProgressionController::class)->group(function(){
    Route::get('/progression','ShowProgression')->name('progression.progression');
    Route::get('/progression/detail/{id}','Detail_Progression')->name('progression.detail_progression');
    Route::get('/progression/add','AddProgression')->name('progression.add');
    Route::post('progression/store','StoreProgression')->name('progression.store');
});

///////////ServiceController

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service','ShowService')->name('dichvu.service');
    Route::get('/service/detail/{id}','Detail_Service')->name('dichvu.detail_service');
});

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


