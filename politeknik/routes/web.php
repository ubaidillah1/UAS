<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Obat;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\Supplier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts/newlogin');
});
//Login
Route::get('/newlogin', [AuthController::class, 'login']);
//Register
Route::get('/newregister', [AuthController::class, 'register']);
//PostLogin
Route::post('/postlogin', [AuthController::class, 'postlogin']);
//LogOut
Route::get('/logout', [AuthController::class, 'logout']);
//Reject
Route::get('/reject', [AuthController::class, 'reject'])->name('reject');
//RejectRole
Route::get('/rejectrole', [AuthController::class, 'rejectrole'])->name('rejectrole');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/dosen/search', [Dosen::class, 'search']);

// Route::get('/newlogin', function(){
//     return view('layouts.newlogin');
// });
Route::group(['middleware' => 'auth'], function () {
//Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
    Route::group(['middleware' => 'CheckRole:supplier,admin'], function () {
        Route::get('/obat/index', [Obat::class, 'index']);
        Route::get('/obat/create', [Obat::class, 'create']);
        Route::post('/obat/store', [Obat::class, 'store']);
        Route::get('/supplier/index', [Supplier::class, 'index']);
        Route::get('/supplier/show/{id}', [Supplier::class, 'show']);
        Route::get('/supplier/create', [supplier::class, 'create']);
        Route::post('/supplier/store', [supplier::class, 'store']);
        Route::post('/supplier/search', [Supplier::class, 'search']);
    });

    Route::group(['middleware' => 'CheckRole:pegawai,admin'], function () {
        Route::get('/supplier/exportpdf',[Supplier::class, 'printpdf']);
        Route::get('/supplier/exportexcel',[Supplier::class, 'printexcel']);
        Route::get('/transaksi/exportpdf',[Transaksi::class, 'printpdf']);
        Route::get('/transaksi/exportexcel',[Transaksi::class, 'printexcel']);
        Route::get('/pegawai/index', [Pegawai::class, 'index']);
        Route::get('/pegawai/show/{id}', [Pegawai::class, 'show']);
        Route::get('/pegawai/create', [Pegawai::class, 'create']);
        Route::post('/pegawai/store', [Pegawai::class, 'store']);
        Route::post('/pegawai/search', [Pegawai::class, 'search']);


    });
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        //Obat
        Route::get('/obat/show/{id}', [Obat::class, 'show']);
        Route::get('/obat/edit/{id}', [Obat::class, 'edit']);
        Route::post('/obat/update/{id}', [Obat::class, 'update']);
        Route::get('/obat/delete/{id}', [Obat::class, 'destroy']);
        Route::post('/obat/search', [Obat::class, 'search']);
        
        //Supplier
        Route::get('/supplier/edit/{id}', [supplier::class, 'edit']);
        Route::post('/supplier/update/{id}', [Supplier::class, 'update']);
        Route::get('/supplier/delete/{id}', [Supplier::class, 'destroy']);

        //Transaksi
        Route::get('/transaksi/index', [Transaksi::class, 'index']);
        Route::get('/transaksi/show/{trx}', [Transaksi::class, 'show']);
        Route::get('/transaksi/create', [Transaksi::class, 'create']);
        Route::post('/transaksi/store', [Transaksi::class, 'store']);
        Route::get('/transaksi/edit/{id}', [Transaksi::class, 'edit']);
        Route::post('/transaksi/update/{trx}', [Transaksi::class, 'update']);
        Route::get('/transaksi/delete/{id}', [Transaksi::class, 'destroy']);
        Route::post('/transaksi/search', [Transaksi::class, 'search']);

        //Pegawai
        Route::get('/pegawai/edit/{id}', [Pegawai::class, 'edit']);
        Route::post('/pegawai/update/{id}', [Pegawai::class, 'update']);
        Route::get('/pegawai/delete/{id}', [Pegawai::class, 'destroy']);

    });
});
// // //Mahasiswa
// Route::get('/mahasiswa/index', [Mahasiswa::class, 'index']);
// Route::get('/mahasiswa/create', [Mahasiswa::class,'create']);
// Route::get('/mahasiswa/show/{id}', [Mahasiswa::class,'show']);
// Route::post('/mahasiswa/store', [Mahasiswa::class,'store']);
// Route::get('/mahasiswa/edit/{id}', [Mahasiswa::class,'edit']);
// // //Form Update Data Mahasiswa
// Route::post('/mahasiswa/update/{id}', [Mahasiswa::class,'update']);

// Route::get('/mahasiswa/delete/{id}', [Mahasiswa::class,'destroy']);
// Route::patch('/mahasiswa/{mahasiswa}', [Mahasiswa::class,'update']);

// Route::resource('mahawsiswa', MahasiswaController::class);

// // //dosen
//  Route::get('/dosen/index', [Dosen::class, 'index']);
// Route::get('/dosen/create', [Dosen::class,'create']);
// Route::get('/dosen/show/{id}', [Dosen::class,'show']);
// Route::post('/dosen/store', [Dosen::class,'store']);
// Route::get('/dosen/edit/{id}', [Dosen::class,'edit']);

// //Form Update Data Mahasiswa
// Route::post('/dosen/update/{id}', [Dosen::class,'update']);

// //Delete Data Dosen
// Route::get('/dosen/delete/{id}', [Dosen::class,'destroy']);