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
// LIST TODO: URGENT @ ALDY
// 1. PISAHKAN LOGIN UNTUK USER/ STUDENT dan UNTUK ADMIN.



// landing page
// masukkin data statis
Route::get('/', [LandingPageController::class, 'index'])->name('root');
Route::get('/profile', [LandingPageController::class, 'profile'])->name('profile');
Route::get('/profile/visi-misi', [LandingPageController::class, 'visi_misi'])->name('visi-misi');
Route::get('/profile/riwayat-kepala-sekolah', [LandingPageController::class, 'riwayat_kepala_sekolah'])->name('riwayat-kepala-sekolah');
Route::get('/profile/struktur-organisasi', [LandingPageController::class, 'struktur_organisasi'])->name('struktur-organisasi');
Route::get('/profile/staff', [LandingPageController::class, 'staff'])->name('staff');
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
Route::middleware(['auth','checkRole:siswa'])->group(function () {
    // Specific route for displaying student detail
    
    Route::get('/student/detail', [\App\Http\Controllers\StudentController::class, 'show_detail'])->name('student.show');
    // Other routes
    Route::get('/student/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
    Route::post('/student', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::put('/student/{id}', [\App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::delete('/student/{id}', [\App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete');
    Route::get('/student/check-registration', [\App\Http\Controllers\StudentController::class, 'check_registration_view'])->name('student.check-registration.view');
    Route::get('/student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');  
    Route::post('/student/check-registration', [\App\Http\Controllers\StudentController::class, 'check_registration'])->name('student.check-registration');
    Route::get('/student/cek-sisa-pembayaran', [\App\Http\Controllers\StudentController::class, 'check_remaining_amount'])->name('student.check-remaining-amount');  
    Route::post('/student/bayar/{registration_uid}', [\App\Http\Controllers\StudentController::class, 'pay_remaining_amount'])->name('student.pay');
    Route::get('/student/bayar', [\App\Http\Controllers\StudentController::class, 'pay_amount'])->name('student.pay_amount');
});


Route::get('admin-login',[\App\Http\Controllers\AdminController::class, 'login_admin'])->name('admin.login');
// Admin
Route::middleware(['auth','checkRole:admin'])->group(function () {
    Route::get('admin/export-students', [\App\Http\Controllers\AdminController::class, 'export_students'])->name('admin.export_students');  
    Route::get('admin/unverified-students',[\App\Http\Controllers\AdminController::class, 'unverified_student_data'])->name('admin.unverified_user_data'); 
    Route::post('admin/verify-student/{registration_uid}/{status}', [\App\Http\Controllers\AdminController::class, 'verifikasi_berkas'])->name('admin.verifikasi_berkas');
    Route::get('admin/verify-student/{registration_uid}', [\App\Http\Controllers\AdminController::class, 'detail_student'])->name('admin.student_detail');
    Route::get('admin/input-biaya-pendidikan/{registration_uid}', [\App\Http\Controllers\AdminController::class, 'create_biaya_pendidikan'])->name('admin.create_biaya_pendidikan');
    Route::post('admin/input-biaya-pendidikan/{registration_uid}', [\App\Http\Controllers\AdminController::class, 'input_biaya_pendidikan'])->name('admin.input_biaya_pendidikan');
    Route::post('admin/accept-administration/{registration_uid}/{status}', [\App\Http\Controllers\AdminController::class, 'accept_reject_application'])->name('admin.accept_reject_application');
    Route::get('admin/pembayaran/{registration_uid}', [\App\Http\Controllers\AdminController::class, 'pembayaran'])->name('admin.pembayaran');
    Route::post('admin/pembayaran/{registration_uid}', [\App\Http\Controllers\AdminController::class, 'input_pembayaran'])->name('admin.input_pembayaran');
    Route::post('admin/verify-student/{registration_uid}/{status}', [\App\Http\Controllers\AdminController::class, 'verifikasi_berkas'])->name('admin_verifikasi_berkas');
    Route::get('admin/register-student', [\App\Http\Controllers\AdminController::class, 'register_student'])->name('admin.register_student');
    Route::post('admin/register-student', [\App\Http\Controllers\AdminController::class, 'create_student'])->name('admin.create_student');
    Route::get('admin/verified-student', [\App\Http\Controllers\AdminController::class, 'list_verified_students'])->name('admin.verified_students');
    // Route::get('admin/list-verified-student', [\App\Http\Controllers\AdminController::class, 'verified_students'])->name('admin.list_verified_students');
});

// admin web
// role is not integrated yet
Route::get('admin/posts/create-post', [\App\Http\Controllers\AdminWebController::class, 'create_post'])->name('admin.create_post');
Route::post('admin/posts/create-new-post', [\App\Http\Controllers\AdminWebController::class, 'create_new_post'])->name('admin.create_new_post');
Route::get('admin/posts/edit-post/{id}', [\App\Http\Controllers\AdminWebController::class, 'edit_post'])->name('admin.edit_post');
Route::post('admin/posts/update-post/{id}', [\App\Http\Controllers\AdminWebController::class, 'update_post'])->name('admin.update_post');
Route::delete('admin/posts/delete-post/{id}', [\App\Http\Controllers\AdminWebController::class, 'delete_post'])->name('admin.delete_post');
Route::get('admin/posts', [\App\Http\Controllers\AdminWebController::class, 'index_posts'])->name('admin.index_posts');
Route::get('admin/posts/{id}', [\App\Http\Controllers\AdminWebController::class, 'detail_post'])->name('admin.detail_post');
Route::post('admin/posts/upload-image', [\App\Http\Controllers\AdminWebController::class, 'upload_image'])->name('admin.upload_image');

Route::get('admin/teachers/create-teacher', [\App\Http\Controllers\AdminWebController::class, 'create_teacher'])->name('admin.create_teacher');
Route::post('admin/teachers/create-new-teacher', [\App\Http\Controllers\AdminWebController::class, 'create_new_teacher'])->name('admin.create_new_teacher');
Route::get('admin/teachers/edit-teacher/{id}', [\App\Http\Controllers\AdminWebController::class, 'edit_teacher'])->name('admin.edit_teacher');
Route::post('admin/teachers/update-teacher/{id}', [\App\Http\Controllers\AdminWebController::class, 'update_teacher'])->name('admin.update_teacher');
Route::delete('admin/teachers/delete-teacher/{id}', [\App\Http\Controllers\AdminWebController::class, 'delete_teacher'])->name('admin.delete_teacher');
Route::get('admin/teachers', [\App\Http\Controllers\AdminWebController::class, 'index_teachers'])->name('admin.index_teachers');
Route::get('admin/teachers/{id}', [\App\Http\Controllers\AdminWebController::class, 'detail_teacher'])->name('admin.detail_teacher');

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
