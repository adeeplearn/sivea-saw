<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SubCriteriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CriteriaRatingController;
use App\Http\Controllers\CriteriaWeightController;
use App\Http\Controllers\DataContoller;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\RankController;

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
    return redirect()->route('login');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => 'auth'], function () {

    Route::resources([
        // 'alternatives' => AlternativeController::class,
        'prodis' => ProdiController::class,
        'matakuliahs' => MatakuliahController::class,
        'criteriaratings' => CriteriaRatingController::class,
        'criteriaweights' => CriteriaWeightController::class,
        'subcriterias' => SubCriteriaController::class
    ]);

    Route::prefix('kritik')->group(function () {
        Route::get('isi', [\App\Http\Controllers\KritikController::class, 'index'])->name('kritik.isi');
    });

    Route::prefix('alternatives')->group(function () {
        Route::get('/', [AlternativeController::class, 'index']);
        Route::get('/{matakuliahId}', [AlternativeController::class, 'index']);
    });

    Route::prefix('polling')->name('polling.')->group(function () {
        Route::get('/', [PollingController::class, 'index']);
        Route::get('listasisten/{mengajarId}', [PollingController::class, 'listasisten'])->name('asisten');
        Route::get('isi/{asistensiId}', [PollingController::class, 'isi'])->name('isi');
        Route::post('isi/{asistensiId}', [PollingController::class, 'store'])->name('store');
    });

    Route::prefix('data')->group(function () {
        Route::get('/', [DataContoller::class, 'index'])->name('data.index');
        Route::post('import', [DataContoller::class, 'import'])->name('data.import');
    });

    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('home', [HomeController::class, 'index']);

    // Route::get('decision', [DecisionController::class, 'index']);

    // Route::get('normalization', [NormalizationController::class, 'index']);

    // Route::get('rank', [RankController::class, 'index']);
});
