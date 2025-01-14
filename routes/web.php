<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
Route::view('/admin', 'admin.admin')->name('admin');
/* Route::get('/test-drive/book', [TestDriveController::class, 'create'])->name('test-drive.book');
Route::post('/test-drive', [TestDriveController::class, 'store'])->name('test-drive.store'); */
/* Route::get('/inventory', action: [VehicleController::class, 'index'])->name('inventorry');
 */
/* Route::get('/test-drive', [TestDriveController::class, 'showForm'])->name('test-drive.form');
Route::post('/test-drive', [TestDriveController::class, 'submitForm'])->name('test-drive.submit');
 */
Route::resource('test-drive', TestDriveController::class);
Route::view('/test-drive', 'test-drive.book')->name('test-drive');
Route::post('/test-drive', [TestDriveController::class, 'store'])->name('test-drive.store');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
