<?php

use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminBookController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminGalleryController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\BookController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\front\MenuController;
use App\Http\Controllers\ProfileController;
use App\Mail\contact;
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

//Route::get('/', function () {
//	return view('welcome');
//});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/content', [ContactController::class, 'index'])->name('content');
Route::post('/content/store', [ContactController::class, 'store'])->name('contact.store');

// admin dashboard routes
Route::middleware(['auth'])->group(callback:function () {
	// admin dashboard routes
	Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
	// book routes
	Route::get('/dashboard/admin/bookings', [AdminBookController::class, 'index'])
		->name('bookings');
	Route::delete('/dashboard/admin/bookings/{bookTable}', [AdminBookController::class, 'destroy'])
		->name('bookings.destroy');
	Route::get('/dashboard/admin/bookings/{bookTable}', [AdminBookController::class, 'show'])
		->name('bookings.show');
	// about routes
	Route::get('dashboard/admin/about', [AdminAboutController::class, 'index'])
		->name('about.index');
	Route::get('dashboard/admin/about/create', [AdminAboutController::class, 'create'])
		->name('about.create');
	Route::post('dashboard/admin/about', [AdminAboutController::class, 'store'])
		->name('about.store');
	Route::get('dashboard/admin/about/{about}', [AdminAboutController::class, 'edit'])
		->name('about.edit');
	Route::patch('dashboard/admin/about/{about}', [AdminAboutController::class, 'update'])
		->name('about.update');
	Route::delete('dashboard/admin/about/{about}', [AdminAboutController::class, 'destroy'])
		->name('about.destroy');

	// GALLERY resourse ROUTES
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::resource('dashboard/admin/gallery', AdminGalleryController::class);

	// Category routes
	Route::resource('dashboard/admin/category', AdminCategoryController::class);
	// product routes
	Route::resource('dashboard/admin/product', AdminProductController::class);

	// contact
	Route::POST('dashboard/admin/contact/mail', [AdminContactController::class, 'send'])
		->name('mail');
	Route::get('dashboard/admin/contact', [AdminContactController::class, 'index'])
		->name('contact.index');
	Route::get('dashboard/admin/contact/{contact}', [AdminContactController::class, 'reply'])
		->name('contact.reply');
	Route::delete('dashboard/admin/contact/{contact}', [AdminContactController::class, 'destroy'])
		->name('contact.destroy');
	//	Route::get('dashboard/admin/content/show', AdminContactController::class, 'create')
	//		->name('content.create');



});

