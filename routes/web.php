<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SubmitCouponsController;
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

Route::get('/', [CourseController::class,'index_es'])->name('home.index_es');
// Route::get('/', [HomeController::class,'index_es'])->name('home.index_es');
Route::get('/udemy-free', [HomeController::class,'coupons_Udemy_free_es'])->name('home.index_courses_es');
// Route::get('/udemy', [HomeController::class,'index_courses_es'])->name('home.index_courses_es');
// Route::get('/courses-free/{ruta}/{page}', [CategoryController::class,'udemy_courses_free_es'])->name('category-free.show');

Route::get('/como-obtengo-cupon-gratis',[ArticleController::class,'index_obtener_cupon']);
Route::get('/politicas-de-privacidad', [HomeController::class, 'politicas_privacidad_es'])->name('politicas-de-privacidad_es');
Route::get('/politica-de-cookies', [HomeController::class, 'politica_cookies_es'])->name('politica-de-cookies_es');

Route::get('/coupons-search/{search_coupons}', [HomeController::class, 'index_courses_search_es'])->name('search_coupon_es');
Route::get('/subcategorias/{idCategoria}', [HomeController::class,'show_es']);

Route::get('/search/{search}/{page}', [HomeController::class, 'search_es'])->name('search_es');

Route::get('/search-udemy-free/{search}/{page}', [HomeController::class, 'udemy_free_search_es'])->name('udemy_free_search_es');
Route::get('/{id_courses}-{rutafree}', [HomeController::class,'show_udemy_free_es'])->name('udemy_free_courses_es');


Route::get('/courses/{ruta}/{page}', [CategoryController::class,'show_es'])->name('category.show_es');
Route::get('/{ruta}/{rutas}/{page}', [SubcategoryController::class,'show_es'])->name("subcategory.show_es");
Route::get('/{ruta}/{rutas_free}/{page}', [SubcategoryController::class,'udemy_courses_free_es'])->name("subcategory.udemy_free_es");

Route::get('/coupons', [CourseController::class, 'index_es'])->name('cupones');

Route::get('/coupons-udemy/{rutacoupons}', [CourseController::class,'show_es'])->name("coupons-udemy.show_es");
Route::post('/comments', [CommentController::class, 'store_es'])->name('comments_es');
Route::get('/coupons/{idioma}', [LanguageController::class,'show_es'])->name("languages.show_es");
Route::get('/courses/itoo',[CourseController::class,'index_itoo_es'])->name('courses.itoo_es');

Route::get('/courses/coupons',[CourseController::class,'coupons_discount_es'])->name('coupons.discount_es');
Route::get('/courses/{course_search}',[CourseController::class,'search_coupons_discount_es'])->name('coupons.search_discount_es');
Route::get('/courses-search/{course_search}',[CourseController::class,'search_courses_discount_es'])->name('search.courses_discount_es');

// Route::get('/blog',[ArticleController::class,'index'])->name('articles.index');
// Route::get('/blog/{ruta}', [ArticleController::class, 'show'])->name('articles.show');

// Route::get('/contact/contactos', [ContactController::class, 'index_es'])->name('contacts.index_es');
// Route::post('contacts', [ContactController::class, 'store'])->name('contacts');
Route::post('/subscribe', [ContactController::class, 'subscribe']);
Route::post('/reportexpired', [CourseController::class, 'reportexpired']);
Route::get('/submit/coupon', [SubmitCouponsController::class, 'submit_coupon_es'])->name('submit.coupon_es');
Route::post('/contacts/submitcoupons', [SubmitCouponsController::class, 'store_es'])->name('submit.coupons_es');
// Route::post('comments', [CommentController::class, 'store'])->name('comments');
// Route::get('/ayuda', [ContactController::class, 'ayuda'])->name('ayuda.index');

Route::get('/blog',[ArticleController::class,'index_es'])->name('articles.index_es');
Route::get('/blog/{ruta}', [ArticleController::class, 'show_es'])->name('articles.show_es');

// Route::get('/filter/Spanish', function () {
//     return view('welcome');
// });


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

