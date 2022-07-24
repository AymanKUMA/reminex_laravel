<?php

use App\Models\users_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\alertsController;
use App\Http\Controllers\slidesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routing and responses 

// Basic routing usually loads views or controlers 
// rout class is used to call http methods such as : post, get, delete and so on 
// we also can add constraints to our http requests

// Route::get('/items/{id}', function($id){
//     return response('<h1 style = "color : blue;">Item ' . $id . '</h1>');
// })->where('id', '[A-Z][0-9]*');

// requests and query params 

// Route::get('/search', function(Request $request_name){
//     return $request_name->firstName . ' ' . $request_name->lastName;
// });


// let's get started


//all listing


// Route::get('/store', function(){
//     $category = request('category');
//     if(isset($category))
//         return 'you are viewing store for ' . strip_tags($category);
//     return 'you are veiwing the store';
// });

// Route::get('/store/{category?}/{item?}', [categoryListing::class, 'store']);

// Route::get('/', function(){
//     return view('index');
// })->name('home.newsSlider');

Route::get('/', [homeController::class, 'index'])->name('home.newsSlider');

Route::get('/login', function(){
    return view('login');
})->name('home.login');

Route::resource('slides', slidesController::class);

Route::resource('alerts', alertsController::class);