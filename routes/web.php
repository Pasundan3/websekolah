<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/home',                 function () { return view('home'); })->name('home');
    Route::get('/change-profile',       App\Livewire\Auth\ChangeProfile::class)->name('auth.change-profile');
    Route::get('/change-password',       App\Livewire\Auth\ChangePassword::class)->name('auth.change-password');
    Route::get('/user',                 App\Livewire\User\UserTable::class)->name('user');
    Route::get('/user/{id}',            App\Livewire\User\UserForm::class)->name('user.form');
    Route::get('/example',              App\Livewire\Example\ExampleTable::class)->name('example');
    Route::get('/example/{id}',         App\Livewire\Example\ExampleForm::class)->name('example.form');
});


// Clear all cache
// ------------------------------------
Route::get('/sys/clear', function () {
    Artisan::call('view:clear');
    dump(Artisan::output());
    Artisan::call('cache:clear');
    dump(Artisan::output());
    Artisan::call('config:clear');
    dump(Artisan::output());
    Artisan::call('event:clear');
    dump(Artisan::output());
    Artisan::call('route:clear');
    dump(Artisan::output());
});

// Student 
Route::get('/student/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::put('/student/{id}', [\App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{id}', [\App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/{id}', [\App\Http\Controllers\StudentController::class, 'show'])->name('student.show');