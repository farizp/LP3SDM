<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PostDataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\HomeController;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Beranda',
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
    ]);
});

Route::get('/registration', [PostDataController::class, 'registration']);
Route::post('/registration', [PostDataController::class, 'store']) -> name('registration.store');
Route::get('/delete/peserta/{id}', [PostDataController::class, 'destroy']) -> name('peserta.delete');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/', [LoginController::class, 'logout']);
Route::get('/profile/{id}', [LoginController::class, 'profile'])->name('profile');

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('blog');
Route::get('/dashboard/tambah', [DashboardController::class, 'create'])->middleware('auth')->name('tambah-blog');
Route::post('/dashboard/tambah', [DashboardController::class, 'store'])->middleware('auth')->name('post-blog');
Route::get('/dashboard/ubah/{id}', [DashboardController::class, 'edit'])->middleware('auth')->name('edit-blog');
Route::patch('/dashboard/ubah/{id}', [DashboardController::class, 'update'])->middleware('auth')->name('update-blog');
Route::get('/dashboard/hapus/{id}', [DashboardController::class, 'destroy'])->middleware('auth')->name('delete-blog');

Route::resource('/data', DashboardPostController::class)->middleware('auth');

Route::get('/edit/{id}', [DashboardPostController::class, 'edit']) -> name('edit-datapeserta');
Route::patch('/edit/{id}', [DashboardPostController::class, 'update'])->name('edit-datapeserta.update');
Route::get('/delete/{id}', [DashboardPostController::class, 'destroy']) -> name('delete-datapeserta');
Route::get('/data-peserta', [DashboardPostController::class, 'dataPeserta'])->middleware('auth')->name('data-peserta');
Route::get('/data-peserta/tambah', [DashboardPostController::class, 'create'])->middleware('auth')->name('tambah-peserta');
Route::post('/data-peserta/tambah', [DashboardPostController::class, 'store'])->middleware('auth')->name('post-peserta');

Route::get('/data-sertifikat', [SertifikatController::class, 'index'])->name('data-sertifikat');
Route::get('/data-sertifikat/tambah', [SertifikatController::class, 'create'])->name('tambah-sertifikat');
Route::post('/data-sertifikat/tambah', [SertifikatController::class, 'store'])->name('post-sertifikat');
Route::get('/data-sertifikat/ubah/{id}', [SertifikatController::class, 'edit'])->middleware('auth')->name('edit-sertifikat');
Route::patch('/data-sertifikat/ubah{id}', [SertifikatController::class, 'update'])->middleware('auth')->name('update-sertifikat');
Route::get('/data-sertifikat/hapus/{id}', [SertifikatController::class, 'destroy'])->middleware('auth')->name('delete-sertifikat');


Route::get('/jadwal', [PelatihanController::class, 'index'])->middleware('auth')->name('jadwal');
Route::get('/jadwal/tambah', [PelatihanController::class, 'create'])->middleware('auth')->name('tambah-jadwal');
Route::post('/jadwal/tambah', [PelatihanController::class, 'store'])->middleware('auth')->name('post-jadwal');
Route::get('/jadwal/ubah/{id}', [PelatihanController::class, 'edit'])->middleware('auth')->name('edit-jadwal');
Route::patch('/jadwal/ubah{id}', [PelatihanController::class, 'update'])->middleware('auth')->name('update-jadwal');
Route::delete('/jadwal/hapus/{id}', [PelatihanController::class, 'destroy'])->middleware('auth')->name('delete-jadwal');




