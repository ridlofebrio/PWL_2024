<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;


Route::get('/hello', function() {return 'Hello World';});

Route::get('/', function () {
    return 'selamat datang';
   });
Route::get('/about', function () {
    return 'Muhammad Ridlo Febrio Putra  2241720098';
   });
      

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Route::get('/user/profile', function () {

//    })->name('profile');
//    Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
//    )->name('profile');

//    $url = route('profile');

//    return redirect()->route('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//    Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//    });
//    Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//    });
//    Route::middleware('auth')->group(function () {
//    Route::get('/user', [UserController::class, 'index']);
//    Route::get('/post', [PostController::class, 'index']);
//    Route::get('/event', [EventController::class, 'index']);
//    });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/', [PageController::class,'hello']);

Route::get('/about', [WelcomeController::class,'about']);

Route::get('/articel/{id}', [WelcomeController::class,'articel']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

// Route::get('/', function () {
//     return view('welcome');
// });
