<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\Home;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Blog;
use App\Models\Contact;
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

Route::get('/', function () {
    return view('frontend.index',[
        'Homes'=>Home::all(),
         'portfolios'=>Portfolio::all(),
         'galleries'=>Gallery::all(),
         'profiles'=>Profile::all(),
         'blogs'=>Blog::all(),
         'contacts'=>Contact::all()

    ]);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('/gallery', function () {
//     return view('frontend.index',[
       
//     ]);
