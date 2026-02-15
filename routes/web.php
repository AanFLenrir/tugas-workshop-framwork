<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| TEST DATABASE
|--------------------------------------------------------------------------
*/

Route::get('/test-db', function () {

    try {
        $dbName = DB::connection()->getDatabaseName();
        return "✅ Connected to database: " . $dbName;
    } catch (\Exception $e) {
        return "❌ Database not connected";
    }

});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

Auth::routes();


/*
|--------------------------------------------------------------------------
| ROOT REDIRECT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    if (Auth::check()) {
        return redirect('/dashboard');
    }

    return redirect('/login');

});


/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (HARUS LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // KATEGORI
    Route::get('/kategori', [KategoriController::class,'index']);

    // BUKU
    Route::get('/buku', [BukuController::class,'index']);

});

//hi