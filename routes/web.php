<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRol;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\OrganizatorController;
use app\Http\Controllers\HomeController;

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

Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

Route::get('/user_id', function () {
    return response()->json(['user_id' => auth()->id()]);
});

Route::get('/session-data', function () {
    return response()->json(auth()->user());
});

Route::get('/home', function () {
    return view('home');
});
                
Route::middleware(['auth', 'checkrol:1'])->group(function () {
    Route::get('/team', function () {
        return view('home');
    });

    Route::get('/add_team', function () {
        return view('home');
    });

    Route::get('/setting', function () {
        return view('home');
    });

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/administrator', [AdministratorController::class, 'index']);
});

Route::middleware(['auth', 'checkrol:2'])->group(function () {
    Route::get('/setting', function () {
        return view('home');
    });

    Route::get('/event', function () {
        return view('home');
    });

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/organizator', [OrganizatorController::class, 'index']);
});

require __DIR__.'/auth.php';
