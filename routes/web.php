<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\Home;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Blog;
use App\Models\Contact;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('frontend.index',[
//         'Homes'=>Home::all(),
//          'portfolios'=>Portfolio::all(),
//          'galleries'=>Gallery::all(),
//          'profiles'=>Profile::all(),
//          'blogs'=>Blog::all(),
//          'contacts'=>Contact::all()

//     ]);
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('/gallery', function () {
//     return view('frontend.index',[
       
//     ]);

Route::get('/Portfolio', function () {
       return view('frontend.Portfolio',
    [
        'Homes'=>Home::all(),
        'portfolios'=>Portfolio::all(),
        'galleries'=>Gallery::all(),
        'profiles'=>Profile::all(),
        'blogs'=>Blog::all(),
        'contacts'=>Contact::all()
    ]);
   });

//    Route::get('/Home', function () {
//     return view('frontend.Home',
//  [
//      'Homes'=>Home::all(),
//      'portfolios'=>Portfolio::all(),
//      'galleries'=>Gallery::all(),
//      'profiles'=>Profile::all(),
//      'blogs'=>Blog::all(),
//      'contacts'=>Contact::all()
//  ]);
// });

Route::get('/1', function () {
    return view('frontend.Home',
 [
     'Homes'=>Home::all(),
     'portfolios'=>Portfolio::all(),
     'galleries'=>Gallery::all(),
     'profiles'=>Profile::all(),
     'blogs'=>Blog::all(),
     'contacts'=>Contact::all()
 ]);
});
    Route::get('/1',[HomeController::class,'index']);
    Route::get('/',function(){
        return view('frontend.Home',[
     'Homes'=>Home::all(),

        ]);
    });
    Route::get('/Home',function(){
        return view('frontend.Home',[
     'Homes'=>Home::all(),

        ]);
    });
    Route::get('/Gallery', function () {
        return view('frontend.Gallery',
     [
         'Homes'=>Home::all(),
         'portfolios'=>Portfolio::all(),
         'galleries'=>Gallery::all(),
         'profiles'=>Profile::all(),
         'blogs'=>Blog::all(),
         'contacts'=>Contact::all()
     ]);
    });
    Route::get('/Contact', function () {
        return view('frontend.Contact',
     [
         'Homes'=>Home::all(),
         'portfolios'=>Portfolio::all(),
         'galleries'=>Gallery::all(),
         'profiles'=>Profile::all(),
         'blogs'=>Blog::all(),
         'contacts'=>Contact::all()
     ]);
    });
    Route::get('/Profile', function () {
        return view('frontend.Profile',
     [
         'Homes'=>Home::all(),
         'portfolios'=>Portfolio::all(),
         'galleries'=>Gallery::all(),
         'profiles'=>Profile::all(),
         'blogs'=>Blog::all(),
         'contacts'=>Contact::all()
     ]);
    });
    Route::get('/Blog', function () {
        return view('frontend.Blog',
     [
         'Homes'=>Home::all(),
         'portfolios'=>Portfolio::all(),
         'galleries'=>Gallery::all(),
         'profiles'=>Profile::all(),
         'blogs'=>Blog::all(),
         'contacts'=>Contact::all()
     ]);
    });



