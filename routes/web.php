<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;




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
    return view('Home');
});


//book details
Route::get('/books/all', [BookController::class, 'allBooks'])->name('bookdetails.all');
Route::get('/books/{id}/show', [BookController::class, 'show'])->name('bookdetails.show');
Route::get('/books/{id}/buy', [BookController::class, 'buy'])->name('bookdetails.buy');
Route::get('/books/{id}/borrow', [BookController::class, 'borrow'])->name('bookdetails.borrow');


// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Book Management Routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');  // Show all books
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');  // Form to add a book
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');  // Store a new book
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');  // Edit book form
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');  // Update book
Route::delete('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');  // Delete book


// login

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// forget
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// purchase
Route::get('/bookdetails/buy/{id}', [BookController::class, 'buy'])->name('bookdetails.buy');
Route::post('/bookdetails/purchase/{id}', [BookController::class, 'purchase'])->name('bookdetails.purchase');


