<?php

use App\Http\Controllers\ExpensController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ResourcePlanController;
use App\Http\Controllers\ResourceProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/phases', [PhaseController::class, 'index'])->name('phases');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/resource-plan', [ResourcePlanController::class, 'index'])->name('resourcePlan');
Route::get('/resource-profile', [ResourceProfileController::class, 'index'])->name('resourceProfile');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);

// Permissions
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);

// Users
Route::middleware('auth')->prefix('users')->name('users.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('destroy');
    Route::get('/update/status/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('status');


    Route::get('/import-users', [UserController::class, 'importUsers'])->name('import');
    Route::post('/upload-users', [UserController::class, 'uploadUsers'])->name('upload');

    Route::get('export/', [UserController::class, 'export'])->name('export');
});

//Staff
Route::resource('staff', StaffController::class);
Route::get('staff-export/', [StaffController::class, 'export'])->name('staff_export');

//Expenses
Route::resource('expenses', ExpensController::class);
Route::get('expenses-export/', [ExpensController::class, 'export'])->name('expenses_export');
Route::post('/upload-expenses', [ExpensController::class, 'uploadExpenses'])->name('expensesUpload');

