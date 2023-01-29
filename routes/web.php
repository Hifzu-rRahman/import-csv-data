<?php

use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\ExportData;
use App\Http\Controllers\ImportData;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Reports;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'index']);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/manage-import-data',[ImportData::class, 'index']);
    Route::post('/import-csv-data',[ImportData::class, 'importCsv']);
    Route::get('/get-csv-data',[ImportData::class, 'getCsvData']);
    Route::get('/manage-export-data',[ExportData::class, 'index']);
    Route::get('/manage-report-1',[Reports::class, 'report_1']);
    Route::get('/manage-report-2',[Reports::class, 'report_2']);
});



require __DIR__.'/auth.php';
