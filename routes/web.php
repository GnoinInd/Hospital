<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



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

Route::get('/',[AdminController::class,'index']);

Route::get('/register',[AdminController::class,'register'])->name('register');
Route::post('/register',[AdminController::class,'storeRegister'])->name('register.submit');

Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('/login',[AdminController::class,'loginCheck'])->name('login.check');

Route::get('/patient-list',[AdminController::class,'list'])->name('patient.list');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('doctor-register',[AdminController::class,'doctorRegister'])->name('doctor.register');
Route::post('doctor-register',[AdminController::class,'doctorRegisterStore'])->name('doctor.registerStore');
Route::get('doctor-login',[AdminController::class,'doctorLogin'])->name('doctor.login');
Route::post('doctor-login',[AdminController::class,'doctorLoginCheck'])->name('doctor.loginCheck');

Route::group(['middleware' => 'auth:doctor'], function () {
    Route::get('doctor-unavailable/{id}',[AdminController::class,'doctorForm'])->name('doctor.unavailable');
    Route::post('/doctor-form',[AdminController::class,'doctorapply'])->name('doctor.leave'); //doctor unavailablity store on leaves table

});

Route::post('/doctor-logout', [AdminController::class, 'docLogout'])->name('doc.logout');

Route::get('patient-form',[AdminController::class,'patientForm'])->name('patient.form');
Route::post('patient-form',[AdminController::class,'formSubmit'])->name('form.submit');

Route::get('image', [AdminController::class, 'showImage'])->name('images');
Route::post('image/upload', [AdminController::class, 'uploadImages'])->name('images.upload');
Route::post('/images/delete-selected', [AdminController::class, 'deleteSelectedImages'])
    ->name('images.deleteSelected');

Route::post('images/updateStatus', [AdminController::class, 'updateStatus'])->name('images.updateStatus');








