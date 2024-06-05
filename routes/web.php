<?php

use App\Http\Controllers\CoursesCountroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** 
 * HTTP Method:
 * 1. Get: Untuk Menampilkan
 * 2. Post: Untuk Mengirim Data
 * 3. Put: Untuk Meng-update Data
 * 4. Delete: Untuk MEnghapus Data
*/

// Route Untuk Menampilkan Teks Salam
Route::get('/salam', function(){
    return "Assalamualaikum...";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/courses', [CoursesCountroller::class, 'index']);


        // Bagian Student
// Route untuk menampilkan halaman from tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

// Route untuk menampilkan halaman form edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);


        // Bagian Courses
// Route untuk menampilkan halaman from tambah courses
Route::get('admin/courses/create', [CoursesCountroller::class, 'create']); 

// untuk mengirim data courses baru
Route::post('admin/courses/store', [CoursesCountroller::class, 'store']);

// Route untuk menampilkan halaman form edit courses
Route::get('admin/courses/edit/{id}', [CoursesCountroller::class, 'edit']);

// Route untuk menyimpan hasil update Courses
Route::put('admin/courses/update/{id}', [CoursesCountroller::class, 'update']);

