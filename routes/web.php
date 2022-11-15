<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\HistoryBukuController;
use App\Http\Controllers\TransaksiAdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login-user');
});

Route::get('/hello/{nama}', function($nama){
    echo "Halo bro $nama";
});

//REGISTER
Route::get('register-user', [RegisterController::class, 'register'])->name('register-user');
Route::post('register-user/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//login
Route::get('/login-user', [LoginController::class, 'login'])->name('login-user');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Auth::routes();

Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware(['auth', 'role:admin', 'status:active']);;

//user
Route::get('admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('index')->middleware(['auth', 'role:admin', 'status:active']);
Route::get('admin/users/tambah', [App\Http\Controllers\UserController::class, 'create'])->name('create')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/users/tambah', [App\Http\Controllers\UserController::class, 'createUser'])->name('createUser')->middleware(['auth', 'role:admin', 'status:active']);
Route::get('admin/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('get-update-user')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/users/update/user/{id}', [App\Http\Controllers\UserController::class, 'updateUser'])->name('post-update-user')->middleware(['auth', 'role:admin', 'status:active']);
Route::delete('admin/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete-user')->middleware(['auth', 'role:admin', 'status:active']);


//book
Route::get('admin/buku', [App\Http\Controllers\BookController::class, 'index'])->name('index-book')->middleware(['auth', 'role:admin', 'status:active']);
Route::get('admin/buku/tambah', [App\Http\Controllers\BookController::class, 'create'])->name('create-index-book')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/buku/tambah', [App\Http\Controllers\BookController::class, 'store'])->name('create-book')->middleware(['auth', 'role:admin', 'status:active']);
Route::delete('admin/buku/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('delete-book')->middleware(['auth', 'role:admin', 'status:active']);
Route::get('admin/buku/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('get-update-buku')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/buku/update/buku/{id}', [App\Http\Controllers\BookController::class, 'updateBuku'])->name('post-update-buku')->middleware(['auth', 'role:admin', 'status:active']);

//major
Route::get('admin/jurusan', [App\Http\Controllers\MajorController::class, 'index'])->name('index-major')->middleware(['auth', 'role:admin']);
Route::get('admin/jurusan/tambah', [App\Http\Controllers\MajorController::class, 'create'])->name('create-index-major')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/jurusan/tambah', [App\Http\Controllers\MajorController::class, 'store'])->name('create-major')->middleware(['auth', 'role:admin', 'status:active']);
Route::delete('admin/jurusan/{id}', [App\Http\Controllers\MajorController::class, 'destroy'])->name('delete-major')->middleware(['auth', 'role:admin', 'status:active']);
Route::get('admin/jurusan/update/{id}', [App\Http\Controllers\MajorController::class, 'update'])->name('get-update-major')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/jurusan/update/jurusan/{id}', [App\Http\Controllers\MajorController::class, 'updatesMajor'])->name('post-update-major')->middleware(['auth', 'role:admin', 'status:active']);


//transaksi
Route::get('admin/transaksi', [App\Http\Controllers\TransaksiAdminController::class, 'index'])->name('get-admin-history-buku-user')->middleware(['auth', 'role:admin', 'status:active']);
Route::post('admin/transaksi/{id}', [App\Http\Controllers\TransaksiAdminController::class, 'konfirmasiBukuUser'])->name('post-konfirmasi-buku-user')->middleware(['auth', 'role:admin', 'status:active']);

Route::get('/user', [App\Http\Controllers\HomeUserController::class, 'index'])->name('get-index-home-user')->middleware(['auth', 'role:mahasiswa', 'status:active']);
Route::get('/user/add/buku/{id}', [App\Http\Controllers\HistoryBukuController::class, 'update'])->name('get-add-buku-user')->middleware(['auth', 'role:mahasiswa', 'status:active']);
Route::post('/user/add/buku', [App\Http\Controllers\HistoryBukuController::class, 'pinjamBuku'])->name('post-add-buku-user')->middleware(['auth', 'role:mahasiswa', 'status:active']);
Route::get('/history/buku', [App\Http\Controllers\HistoryBukuController::class, 'index'])->name('get-history-buku-user')->middleware(['auth', 'role:mahasiswa', 'status:active']);
Route::post('history/buku/{id}', [App\Http\Controllers\HistoryBukuController::class, 'kembaliBuku'])->name('post-kembalikan-buku-user')->middleware(['auth', 'role:mahasiswa', 'status:active']);

Auth::routes();


