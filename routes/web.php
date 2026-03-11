<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/stories', 'User.stories')->name('stories');
    Route::view('/storiesmange', 'User.storiesmange')->name('storiesmange');
    Route::view('/donate', 'User.donate')->name('donate');
    Route::view('/dontes', 'User.dontes')->name('dontes');
    Route::view('/home', 'User.home')->name('home');
    Route::view('/settings', 'User.settings')->name('settings');


    //land 
    Route::view('/index', 'land.index')->name('index');
    Route::view('/aboutus', 'land.aboutus')->name('aboutus');
    Route::view('/chances', 'land.chances')->name('chances');
    Route::view('/contact', 'land.contact')->name('contact');
    Route::view('/privacy', 'land.privacy')->name('privacy');
    Route::view('/readmore', 'land.readmore')->name('readmore');


    //admin
    Route::view('/admindashboard', 'admin.admindashboard')->name('admindashboard');
    Route::view('/projectmanagement', 'admin.projectmanagement')->name('projectmanagement');
    Route::view('/donatesmanage', 'admin.donatesmanage')->name('donatesmanage');
    Route::view('/reports', 'admin.reports')->name('reports');
    Route::view('/reportdetail', 'admin.reportdetail')->name('reportdetail');
    Route::view('/storiesmange', 'admin.storiesmange')->name('storiesmange');
    Route::view('/systemsettings', 'admin.systemsettings')->name('systemsettings');
    Route::view('/usermanage', 'admin.usermanage')->name('usermanage');

    //order
    Route::view('/order', 'Order.orders')->name('order');
    Route::view('/orderdetails', 'Order.needdashboard')->name('orderdetails');
    Route::view('/needask', 'Order.needask')->name('needask');
});

require __DIR__ . '/auth.php';
