<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TmpCtlr;
use App\Http\Controllers\FormController;

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

use App\Http\Controllers\DbCtlr;
use App\Http\Controllers\ModelCtlr;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FileCtlr;


Route::get('/tmpCtlr1', [TmpCtlr::class, 'getUser']);
Route::get('/tmpCtlr3/{surname}', [TmpCtlr::class, 'passData']);
Route::get('/tmpCtlr4', [TmpCtlr::class, 'nestedView']);


Route::get('/', function () {
    return view('welcome');
});
// Route::view('/route', 'view-name'); // if we want to open a view.

Route::get('/dyRt/{param}', function ($data) {
    return view('passData', ['var' => $data]);
}); // In view, we can use $var to access the data passed in the url

Route::redirect('/rdr', '/'); // if we want to redirect a route (rdr) to another route


// URL Generation --------------------------------------------------
Route::get('/url', function () {
    return view('url');
});
Route::get('/url/{param}', function () {
    return view('url');
});


// Named Routes --------------------------------------------------
Route::get('/home/profile/user', function () {
    return view('url');
})->name('hm');
Route::get('/namedRoute', [TmpCtlr::class, 'getUser']);


// Route grouping with prefix ------------------------------------
// Route::get('/admin/user', function () { return "User";});
Route::prefix('admin')->group(function () {
    Route::get('/user', function () {
        return "User";
    });
    Route::get('/product', function () {
        return "Product";
    });
});


// Route grouping with controller ------------------------------------
Route::controller(TmpCtlr::class)->group(function () {
    Route::get('/tmpCtlr2', 'getUser');
    Route::get('/tmpCtlr3/{surname}', 'passData');
    Route::get('/tmpCtlr4', 'nestedView');
});


// Middlewares -----------------------------------------------------
// Middleware is a way to filter HTTP requests entering your application through the web routes and parameters and values passed.
// Middleware can be used for authentication, logging, CORS, etc.

Route::view('/mroute1','welcome')->middleware(AgeCheck::class);
Route::view('/mroute2','welcome')->middleware([AgeCheck::class,CountryCheck::class]);
// http://127.0.0.1:8000/mroute2?age=19&country=India
// We dont need to register the middleware in the bootstrap/app.php file as we are using it directly in the route.

Route::get('/middleware', function () {
    return view('welcome');
})->middleware('mgroup');

Route::middleware('mgroup')->group( function () {
    Route::view('/mroute3', 'welcome');
    Route::view('/mroute4', 'url');
    Route::view('/mroute5', 'passData');
});


// DATABASE ---------------------------------------------------------
Route::get('/db', [DbCtlr::class, 'getData']);
Route::get('/mdb', [ModelCtlr::class, 'getData']);


// Routing methods --------------------------------------------------
// browser based -> browser serves to user request
    // view
    // get
// form based -> user give data to browser
    // post
    // patch, put
    // delete
// options -> used by browser itself

Route::any('/any', function () {
    return view('welcome');
});
// This route will call the same method for all types of request (get, post, put, delete, etc.).

Route::match(['get', 'post'], '/match', function () {
    return view('welcome');
});
// This route will call the same method for specified request only.


// FORM --------------------------------------------------------------
Route::get('/form', function () {
    return view('user-form');
});
Route::post('/addUser', [FormController::class, 'addUser']);


// HTTP Request --------------------------------------------------
Route::get('/apiCall', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
    $data = json_decode($response->body());
    return $data;
});


// Session and Flash Session------------------------------------------
Route::view('profile', 'profile');
Route::view('login', 'login');
Route::post('login', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);


// File Uploading ----------------------------------------------------
Route::view('upload','file-upload');
Route::post('upload', [FileCtlr::class, 'uploadFile']);




