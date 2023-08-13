<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
    return view('main_page');
});

// STELLAR INNOVATION ROUTES START

Route::get('/stellar/innovation/home', function(){
    return view('welcome');
});

// STELLAR INNOVATION ROUTES END

Route::get('/stellar/innovation/contact', function(){
    return view('contact');
});

Route::get('/stellar/innovation/about', function(){
   return view('about');
});

Route::get('/stellar/innovation/portfolio', function(){
    return view('portfolio');
});

Route::get('stellar/innovation/social-media-marketing', function(){
    return view('social_media');
});

Route::get('stellar/innovtion/marketing-consulting', function(){
    return view('marketing_consulting');
});

Route::get('stellar/innovtion/brand-development', function(){
    return view('brand_development');
});

Route::get('stellar/innovtion/video-production', function(){
    return view('video_production');
});

Route::get('stellar/innovtion/photography', function(){
    return view('photography');
});

Route::get('stellar/innovtion/social-media-management', function(){
    return view('social_media_management');
});

Route::get('stellar/innovtion/ecommerce', function(){
    return view('ecommerce');
});






// STELLAR EUPHORIA ROUTES START

Route::get('/stellar/euphoria/home', function(){
   return view('euphoria.home');
});

Route::get('stellar/euphoria/about', function(){
    return view('euphoria.about');
});

Route::get('stellar/euphoria/portfolio', function(){
    return view('euphoria.portfolio');
});



Route::get('stellar/euphoria/blog', function(){
    return view('euphoria.blog');
});

Route::get('stellar/euphoria/contact', function(){
    return view('euphoria.contact');
});



// STELLAR EUPHORIA ROUTES END




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/add-blog', [BlogController::class, 'add_blog'])->name('add_blog');
Route::post('/store-blog', [BlogController::class, 'store_blog'])->name('/store-blog');
Route::get('/blog-list', [BlogController::class, 'blog_list'])->name('blog-list');
Route::get('blog-delete/{slug}', [BlogController::class, 'blog_delete']);
Route::get('blog-edit/{slug}', [BlogController::class, 'blog_edit']);
Route::post('/blog-update', [BlogController::class, 'blog_update']);
