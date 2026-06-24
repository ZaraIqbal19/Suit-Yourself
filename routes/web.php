<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/register', 'register');
// Route::view('/login', 'auth.login');
 Route::post('/register', [UserController::class, 'register']);
    // ->name('register.store');

 Route::post('/login', [UserController::class, 'login']);
//     ->name('login.store');



Route::get('/logout', [UserController::class, 'logout']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/admin/Admindashboard', function () {

        if (Auth::user()->role == "User") {
            return view('welcome');
        } 
        
        else {
            return view('admin.Admindashboard');
        }

    })->name('Admindashboard');

});



Route::middleware(['auth', AdminMiddleware::class])->group(function () {

    Route::get('/admin/Admindashboard', function () {
        return view('admin.Admindashboard');
    });


    Route::get('/admin/Admindashboard', [AdminController::class, 'index'])
    ->name('Admindashboard');


    Route::get('deleteuser/{id}',[AdminController::class, 'deleterecord'])
    ->name('Admindashboard');

   Route::get('/edituser/{id}', [AdminController::class, 'edit']);
Route::post('/updateuser/{id}', [AdminController::class, 'update']);

Route::get('/admin/Category', function () {
    return view('admin.Category');
});
}); 