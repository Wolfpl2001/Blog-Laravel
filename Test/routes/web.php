<?php

use App\Models\blog;
use App\Http\Controllers\cblog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/start', function () {
return view('startpage');
});

Route::get('/register',[UserController::class, 'create']);

Route::get('/login',[UserController::class, 'login']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/user',[UserController::class, 'logins']);

Route::get('/blog-c', function (){
    return view('blogs.blog-c');
});

Route::get('/blog-r', function(){
    return view('blogs.blog-r', [
        'heading' => 'Latest blog',
        'blog' => blog::all()
    ]);
});

Route::get('/blog-list/{id}', function($id){
    $blog = Blog::find($id);

    return view('blogs.blog-list', [
        'blog' => $blog
    ]);
});

Route::post('/c-blog' , [cblog::class, 'blogs']);
Route::get('/remove/{id}', [cblog::class, 'remove']);