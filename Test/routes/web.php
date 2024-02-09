<?php

use App\Models\blog;
use App\Http\Controllers\cblog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('startpage');
})->middleware(['auth'])->name('dashboard');

Route::get('/remove/{id}', [cblog::class, 'remove']);
Route::post('/c-blog' , [cblog::class, 'blogs']);

Route::get('/blog-r', function(){
    return view('blogs.blog-r', [
        'heading' => 'Latest blog',
        'blog' => blog::all()
    ]);
})->middleware(['auth'])->name('blog-r');
Route::get('/blog-c', function (){
    return view('blogs.blog-c');
})->middleware(['auth'])->name('blog-c');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
});

Route::get('/blog-list/{id}', function($id){
    $blog = Blog::find($id);

    return view('blogs.blog-list', [
        'blog' => $blog
    ]);
})->middleware(['auth'])->name('blog-list');

Route::get('/register', function(){
    return view('auth.register');
})->middleware(['auth'])->name('register');

require __DIR__.'/auth.php';
