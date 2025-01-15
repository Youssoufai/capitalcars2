<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TestDriveController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about.about')->name('about');
Route::view('/service', 'service.service')->name('service');
Route::view('/contact', 'contact.contact')->name('contact');
Route::view('/inventory', 'inventory.inventory')->name('inventory');


// Test Drive Resource
Route::resource('test-drive', TestDriveController::class);

// Auth Routes
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/test-drive', [TestDriveController::class, 'create'])->name('test-drive');
Route::get('test-drive/2', [TestDriveController::class, 'show'])->name('test-drive.show');

Route::post('/admin', [VehicleController::class, 'store'])->name('vehicle-store');
Route::middleware('auth')->group(function () {
    Route::view('/admin', 'admin.admin')->name('admin');
});
Route::get('/admin/dashboard', [VehicleController::class, 'index'])->name('admin.dashboard');
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.inventory');

Route::delete('/vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

/* Route::get('/test-drive/book', [TestDriveController::class, 'create'])->name('test-drive.book');
Route::post('/test-drive', [TestDriveController::class, 'store'])->name('test-drive.store'); */
/* Route::get('/inventory', action: [VehicleController::class, 'index'])->name('inventorry');
 */
/* Route::get('/test-drive', [TestDriveController::class, 'showForm'])->name('test-drive.form');
Route::post('/test-drive', [TestDriveController::class, 'submitForm'])->name('test-drive.submit');
 */