

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\LogAndRegistration;
use App\Http\Controllers\recyclingProductController;
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

Route::get('/aa',[LogAndRegistration::class, 'getUser']);
Route::get('/registration', [LogAndRegistration::class, 'registration']);
Route::get('/loginAsAdmin', [LogAndRegistration::class, 'login']);
Route::post('/register_user', [LogAndRegistration::class, 'registerUser'])->name('register_user');
Route::post('/login_user', [LogAndRegistration::class, 'loginUser'])->name('login_user');
Route::get('/deshboard', [LogAndRegistration::class, 'deshboard']);
Route::get('/RequestToCollect',[LogAndRegistration::class, 'RequestToCollect']);
Route::get('/logout', [LogAndRegistration::class, 'logout']);





Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('request');
});
Route::get('/requestSuccessfullmessage', function () {
    return view('requestSuccessfullmessage');
});

Route::resource("/adminDashboard", StudentController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
 
Route::resource("/member", recyclingProductController::class);

require __DIR__.'/auth.php';
