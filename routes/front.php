<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
  });
Route::get(uri:'', action: function(){
    return view('auth.login');
});




Auth::routes();

Route::get('/home',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('/admin/services',[\App\Http\Controllers\Admin\ServiceController::class]);
Route::get('admin/customers',action: [CustomerController::class,'index'])->name(name: 'admin.customers');
Route::get('admin/books',action: [BookController::class,'index'])->name(name: 'admin.books');
Route::get('admin/borrows',action: [BorrowController::class,'index'])->name(name: 'admin.borrows');
Route::get('admin/librarians',action: [LibraryController::class,'index'])->name(name: 'admin.librarians');



Route::get('admin/books',[BookController::class,'index'])->name('admin.books');
Route::get('admin/books/create',[BookController::class,'create'])->name('admin.books.create');
Route::post('admin/books/store',[BookController::class,'store'])->name('admin.books.store');
Route::get('admin/books/edite/{id}',[BookController::class,'edit'])->name('admin.books.edite');
Route::get('admin/books/show/{id}',[BookController::class,'show'])->name('admin.books.show');
Route::put('admin/books/update/{id}',[BookController::class,'update'])->name('admin.books.update');
Route::post('admin/books/destroy/{id}',[BookController::class,'destroy'])->name('admin.books.destroy');



Route::get('admin/borrrows',[BorrowController::class,'index'])->name('admin.borrrows');
Route::get('admin/borrrows/create',[BorrowController::class,'create'])->name('admin.borrrows.create');
Route::post('admin/borrrows/store',[BorrowController::class,'store'])->name('admin.borrrows.store');
Route::get('admin/borrrows/edite/{id}',[BorrowController::class,'edit'])->name('admin.borrrows.edite');
Route::get('admin/borrrows/show/{id}',[BorrowController::class,'show'])->name('admin.borrrows.show');
Route::put('admin/borrrows/update/{id}',[BorrowController::class,'update'])->name('admin.borrrows.update');
Route::post('admin/borrrows/destroy/{id}',[BorrowController::class,'destroy'])->name('admin.borrows.destroy');


Route::get('admin/librarians',[LibraryController::class,'index'])->name('admin.librarians');
Route::get('admin/librarians/create',[LibraryController::class,'create'])->name('admin.librarians.create');
Route::post('admin/librarians/store',[LibraryController::class,'store'])->name('admin.librarians.store');
Route::get('admin/librarians/edite/{id}',[LibraryController::class,'edit'])->name('admin.librarians.edite');
Route::get('admin/librarians/show/{id}',[LibraryController::class,'show'])->name('admin.librarians.show');
Route::put('admin/librarians/update/{id}',[LibraryController::class,'update'])->name('admin.librarians.update');
Route::post('admin/librarians/destroy/{id}',[LibraryController::class,'destroy'])->name('admin.librarians.destroy');



Route::get('admin/customers',[CustomerController::class,'index'])->name('admin.customers');
Route::get('admin/customers/create',[CustomerController::class,'create'])->name('admin.customers.create');
Route::post('admin/customers/store',[CustomerController::class,'store'])->name('admin.customers.store');
Route::get('admin/customers/edite/{id}',[CustomerController::class,'edit'])->name('admin.customers.edite');
Route::get('admin/customers/show/{id}',[CustomerController::class,'show'])->name('admin.customers.show');
Route::put('admin/customers/update/{id}',[CustomerController::class,'update'])->name('admin.customers.update');
Route::post('admin/customers/destroy/{id}',[CustomerController::class,'destroy'])->name('admin.customers.destroy');

