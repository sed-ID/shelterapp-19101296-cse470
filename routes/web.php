<?php

use App\Http\Controllers\backend\ActivityController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\DonationController;
use App\Http\Controllers\backend\FoundationController;
use App\Http\Controllers\frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');

});

Route::group(['middleware'=>['auth:admin']], function(){
    Route::get('/profile',[AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/edit',[AdminProfileController::class, 'AdminProfileEdit'])->name('profile.edit');
    Route::post('/update',[AdminProfileController::class, 'AdminProfileUpdate'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.admin.password');
    Route::get('/admin/logout',[AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/donation/report',[AdminProfileController::class, 'DonationReport'])->name('donation.report');

});











Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');



Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {

    return view('frontend.profile.profile_master');
})->name('dashboard');



//Admin Routes

//Foundation Routes
Route::get('/control/foundation',[AdminProfileController::class, 'ControlFoundation'])->name('all.foundations');
Route::get('/control/foundation/approve/{id}',[AdminProfileController::class, 'ApproveFoundation'])->name('approve.foundation');

//Frontend Routes
Route::get('/',[IndexController::class, 'Index']);
//Activity Details Route
Route::get('activities/details/{activity_id}',[IndexController::class, 'ActivityDetails']);
//Foundation Details Route
Route::get('foundations/details/{foundation_id}',[IndexController::class, 'FoundationDetails']);
//Stripe Donation
Route::post('/donate/card',[DonationController::class, 'DonateWithStripe'])->name('stripe.donation');
//Bkash Donation
Route::post('/donate/bkash',[DonationController::class, 'DonateWithBkash'])->name('bkash.donation');
//Foundation Review
Route::post('/foundation/review',[FoundationController::class, 'FoundationReview'])->name('foundation.review');



//User Routes
Route::get('/user/profile',[IndexController::class, 'UserProfile'])->name('user.profile');
Route::get('/user/edit',[IndexController::class, 'UserProfileEdit'])->name('user.profile.edit');
Route::get('/user/change/password',[IndexController::class, 'UserChangePassword'])->name('user.change.password');
Route::post('/user/update',[IndexController::class, 'UserProfileUpdate'])->name('user.profile.store');
Route::post('/user/password/update',[IndexController::class, 'UserUpdatePassword'])->name('user.password.update');
Route::get('/user/logout',[IndexController::class, 'UserLogout'])->name('user.logout');



//Foundation Routes
Route::get('/user/foundation/all',[FoundationController::class, 'ShowFoundation'])->name('view.foundation');
Route::get('/user/foundation/create',[FoundationController::class, 'CreateFoundation'])->name('create.foundation');
Route::post('/user/foundation/store',[FoundationController::class, 'StoreFoundation'])->name('store.foundation');
Route::get('/user/foundation/edit/{id}',[FoundationController::class, 'EditFoundation'])->name('edit.foundation');
Route::post('/user/foundation/update',[FoundationController::class, 'UpdateFoundation'])->name('update.foundation');
Route::get('/user/foundation/delete/{id}',[FoundationController::class, 'DeleteFoundation'])->name('delete.foundation');

//Activity Routes
Route::get('/user/activity/all',[ActivityController::class, 'ShowActivity'])->name('view.activity');
Route::get('/user/activities/create',[ActivityController::class, 'CreateActivity'])->name('create.activity');
Route::post('/user/activities/store',[ActivityController::class, 'StoreActivity'])->name('store.activity');
Route::get('/user/activities/edit/{id}',[ActivityController::class, 'EditActivity'])->name('edit.activities');
Route::post('/user/activities/update',[ActivityController::class, 'UpdateActivity'])->name('update.activities');
Route::get('/user/activity/delete/{id}',[ActivityController::class, 'DeleteActivity'])->name('delete.activity');





