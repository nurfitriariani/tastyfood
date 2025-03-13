<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\UserController;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

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
//     return view('home');
// });

//tampilan
Route::get('/tentang', [UserController::class, 'tentang']);
Route::get('/berita', [UserController::class, 'berita']);
Route::get('/galeri', [UserController::class, 'galeri']);
Route::get('/kontak', [UserController::class, 'kontak']);
Route::get('/', [UserController::class, 'home']);
Route::get('/footer', [UserController::class, 'footer']);
// Route::get('/home', [UserController::class, 'berita']);

Route::post('/auth', [UserController::class, 'auth']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/kontak',[UserController::class, 'tambahkontak']);

Route::middleware('login')->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/dashboardd', [UserController::class, 'dashboardd']);
    //admin
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/tambah',[UserController::class, 'tambah']);
    Route::post('/tambah',[UserController::class, 'tambahh']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::put('/edit/{id}', [UserController::class, 'update']);
    Route::delete('/admin/{id}', [UserController::class, 'delete'])->name('delete');
    //galeri
    Route::get('/galeriadmin',[UserController::class, 'galeriadmin']);
    Route::get('/tambahgaleri',[UserController::class, 'tambahgaleri']);
    Route::post('/tambahgaleri',[UserController::class, 'tambahhgaleri']);
    Route::delete('/galeriadmin/{id}', [UserController::class, 'deletegaleri'])->name('deletegaleri');
    Route::get('/editgaleri/{id}', [UserController::class, 'editgaleri']);
    Route::put('/editgaleri/{id}', [UserController::class, 'updategaleri']);
    //berita
    Route::get('/beritaadmin',[UserController::class, 'beritaadmin']);
    Route::get('/tambahberita',[UserController::class, 'tambahberita']);
    Route::post('/tambahberita',[UserController::class, 'tambahhberita']);
    Route::delete('/beritaadmin/{id}', [UserController::class, 'deleteberita'])->name('deleteberita');
    Route::get('/editberita/{id}', [UserController::class, 'editberita']);
    Route::put('/editberita/{id}', [UserController::class, 'updateberita']);

    //kontak
    Route::get('/kontakadmin',[UserController::class, 'kontakadmin']);
    Route::delete('/kontakadmin/{id}', [UserController::class, 'deletekontak'])->name('deletekontak');
    // Halaman edit kontak di admin
    Route::get('/editcontact/{id}', [UserController::class, 'editcontact']);
    Route::put('/editcontact/{id}', [UserController::class, 'updatecontact']);
    Route::get('/ubahkontak',[UserController::class, 'ubahkontak']);
// Route::get('/contact/{id}', [UserController::class, 'showContact']);

});
//profile
Route::get('/profile',[UserController::class, 'profile']);


Route::get('detailberita/{id}', [UserController::class, 'detailberita']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');
