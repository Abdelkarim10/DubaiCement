<?php

use App\Http\Controllers\MaintlbsController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


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
Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::middleware(['auth.custom'])->group(function () {
  
    Route::get('/home/tables', [MaintlbsController::class, 'index'])->name('maintlbs.index');
    Route::get('/maintlbs/create', [MaintlbsController::class,'create']);
    Route::post('/maintlbs', [MaintlbsController::class,'store'])->name('maintlbs.store');
    Route::get('maintlbs/{id}/edit', [MaintlbsController::class, 'edit'])->name('maintlbs.edit');
    Route::put('maintlbs/{maintlb}', [MaintlbsController::class, 'update'])->name('maintlbs.update');
    Route::delete('maintlbs/{id}/delete', [MaintlbsController::class, 'destroy'])->name('maintlbs.destroy');

    Route::get('/tables/{id}', [TableController::class, 'index'])->name('table.index');
    Route::get('/tables/create/{id}', [TableController::class, 'create'])->name('table.create');
    Route::post('/tables/store', [TableController::class, 'store'])->name('table.store');
    Route::get('/tables/{id}/edit', [TableController::class, 'edit'])->name('table.edit');
    Route::put('/tables/{id}', [TableController::class, 'update'])->name('table.update');
    Route::delete('/tables/{id}', [TableController::class, 'destroy'])->name('table.destroy');
   
 
    Route::get('/home/form', function () {
        return view('pages/form');
    });

   

   
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
