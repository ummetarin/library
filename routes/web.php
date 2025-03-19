<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ServiceController;




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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('About');
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
Route::post('/books/borrow/{id}', [BookController::class, 'storeBorrow'])->name('bookdetails.storeBorrow');
Route::get('/books/sold', [BookController::class, 'soldBooks'])->name('books.sold');
Route::get('/books/borrows', [BookController::class, 'borrowsBooks'])->name('books.borrows');
Route::get('/bookdetails/borrow/{id}', [BookController::class, 'borrow'])->name('bookdetails.borrow');
Route::post('/bookdetails/borrow/{id}', [BookController::class, 'processBorrow'])->name('bookdetails.processBorrow');





///uuserr
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users/make-admin/{id}', [UserController::class, 'makeAdmin'])->name('users.makeAdmin');
Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');


// paypal
Route::get('paypal', [PayPalController::class, 'index'])->name('paypal');
Route::get('paypal/payment', [PayPalController::class, 'payment'])->name('paypal.payment');
Route::get('paypal/payment/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.payment.success');
Route::get('paypal/payment/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.payment/cancel');

// service

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/all', [ServiceController::class, 'all'])->name('services.all');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');






