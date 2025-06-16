<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisteredUserController;

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
//     return view('homepage');
// });

Route::get('/', function () {
    return redirect('/dashboard');
});

// Route::get('/addbill', [HomeController::class,'addbill'])->name('addbill');

// Route::get('/clients', [ClientController::class,'index'])->name('clients');
// Route::post('/getclient', [HomeController::class,'getclient'])->name('getclient');
// Route::post('/addbilldetails', [HomeController::class,'addbilldetails'])->name('addbilldetails');






// Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashbaord');
// Route::get('/client-list', [HomeController::class,'client_list'])->name('client.list');
// Route::get('/client', [HomeController::class,'client'])->name('client');
// Route::post('/client-save', [HomeController::class,'client_save'])->name('client.save');
// Route::post('/client-edit', [HomeController::class,'client_edit'])->name('client.update');
// Route::get('/get-client-data', [HomeController::class,'client_data'])->name('get.client-data');
// Route::post('/bill-preview', [HomeController::class,'bill_preview'])->name('bill.preview');

// Route::get('/bill-list', [HomeController::class,'bill_list'])->name('bill.list');

// Route::post('/bill-data', [HomeController::class,'bill_data'])->name('bill.data');

// Route::post('/duplicate-bill-save', [HomeController::class,'duplicate_bill_save'])->name('dup.bill.save');

// Route::get('/print-bill', [HomeController::class,'print_bill'])->name('print.bill');



// Route::get('/bill', [HomeController::class,'billing'])->name('bill.create');
// Route::get('/fetch_wt2_data', [HomeController::class,'fetch_wt2_data'])->name('get.worktype2');
// Route::get('/fetch_rate', [HomeController::class,'fetch_wt2_rate'])->name('get.worktype2.rate');

// Route::post('/create-bill', [HomeController::class,'create_bill'])->name('bill.save');











// Route::get('/login', [AuthController::class,'signin'])->name('signin');
// Route::get('/signup', [AuthController::class,'signup'])->name('signup');

// Route::post('/signup', [AuthController::class,'do_signup'])->name('signup.save');


// Route::middleware('guest')->group(function () {
//     Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//     // Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
//     // Add more routes here that should be protected
// });


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'create_login'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.auth');

    // Route::get('/register', [RegisteredUserController::class, 'create_signup'])->name('signup');
    // Route::post('/register', [RegisteredUserController::class, 'store'])->name('signup.save');
});


Route::middleware('auth', 'is.active')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/client-search', [HomeController::class, 'client_search'])->name('client.search');





    Route::get('/client-list', [HomeController::class,'client_list'])->name('client.list');
    Route::get('/client', [HomeController::class,'client'])->name('client');
    Route::get('/user', [HomeController::class,'user'])->middleware('is.admin')->name('user');
    Route::get('/user-list', [HomeController::class,'user_list'])->middleware('is.admin')->name('user.list');
    Route::post('/update-user-status', [HomeController::class,'update_user_status'])->middleware('is.admin')->name('update.user.status');



    Route::post('/client-save', [HomeController::class,'client_save'])->name('client.save');

    Route::post('/user-save', [RegisteredUserController::class,'user_save'])->middleware('is.admin')->name('user.save');

    Route::post('/client-edit', [HomeController::class,'client_edit'])->name('client.update');
    Route::get('/get-client-data', [HomeController::class,'client_data'])->name('get.client-data');
    Route::post('/bill-preview', [HomeController::class,'bill_preview'])->name('bill.preview');

    Route::get('/bill-list', [HomeController::class,'bill_list'])->name('bill.list');

    Route::post('/bill-data', [HomeController::class,'bill_data'])->name('bill.data');

    Route::post('/duplicate-bill-save', [HomeController::class,'duplicate_bill_save'])->name('dup.bill.save');

    Route::get('/print-bill', [HomeController::class,'print_bill'])->name('print.bill');
    Route::post('/print-bill', [HomeController::class,'print_bill'])->name('print.bill');

    Route::get('/delete-bill', [HomeController::class,'delete_bill'])->name('delete.bill');


    Route::get('/bill-success', [HomeController::class,'success_bill'])->name('success.bill');

    Route::post('/bill-view', [HomeController::class,'bill_view'])->name('bill.view');


    Route::get('/deleted-bill-list', [HomeController::class,'deleted_bill_list'])->name('deleted.bill.list');



    Route::get('/bill', [HomeController::class,'billing'])->name('bill.create');

    Route::get('/edit_bill', [HomeController::class,'edit_bill'])->name('bill.edit');


    Route::get('/fetch_wt2_data', [HomeController::class,'fetch_wt2_data'])->name('get.worktype2');
    Route::get('/fetch_rate', [HomeController::class,'fetch_wt2_rate'])->name('get.worktype2.rate');

    Route::post('/create-bill', [HomeController::class,'create_bill'])->name('bill.save');

    Route::post('/update-bill', [HomeController::class,'update_bill'])->name('bill.update');



    Route::post('/user-update', [HomeController::class,'update_user'])->name('user.update');





    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
});


