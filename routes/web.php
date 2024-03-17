<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LandingPageController;
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
// landing page
Route::get('/', [LandingPageController::class, 'index'])->name('root');
Route::get('/profile', [LandingPageController::class, 'profile'])->name('profile');
Route::get('/profile/visi-misi', [LandingPageController::class, 'visi_misi'])->name('visi-misi');
Route::get('/profile/riwayat-kepala-sekolah', [LandingPageController::class, 'riwayat_kepala_sekolah'])->name('riwayat-kepala-sekolah');
Route::get('/profile/struktur-organisasi', [LandingPageController::class, 'struktur_organisasi'])->name('struktur-organisasi');
Route::get('/kontak', [LandingPageController::class, 'kontak'])->name('kontak');
Route::get('/ppdb', [LandingPageController::class, 'ppdb'])->name('ppdb');
Route::get('/ppdb/{year}', [LandingPageController::class, 'ppdb_by_year'])->name('ppdb-by-year');
Route::get('/kurikulum', [LandingPageController::class, 'kurikulum'])->name('kurikulum');
Route::get('/kesiswaan', [LandingPageController::class, 'kesiswaan'])->name('kesiswaan');
Route::get('/blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [LandingPageController::class, 'blog_with_id'])->name('blog-with-id');

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


// Admin
Route::get('admin/export-students', [\App\Http\Controllers\AdminController::class, 'export_students'])->name('admin_export_students');  
Route::get('admin/unverified-students',[\App\Http\Controllers\AdminController::class, 'unverified_student_data'])->name('admin_unverified_user_data'); 
Route::post('admin/verify-student/{registration_uid}/{status}', [\App\Http\Controllers\AdminController::class, 'verifikasi_berkas'])->name('admin_verifikasi_berkas');

// Fallback route for handling 404 errors for guests
Route::fallback(function (Request $request) {
    // Check if the user is authenticated
    if ($request->user() === null) {
        return view('404');
    } else {
        // For authenticated users, you can redirect or show a different page
        // For example, redirect authenticated users to the home page
        return redirect('/');
    }
});
