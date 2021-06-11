<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteProject;
use App\Http\Controllers\DeleteUser;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ChangePasswordController;
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

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/login', function () {
    return view('pages.login');
})->name('auth.login');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('auth.register');

Route::get('/dashboard', [PageController::class, 'showpro'])->name('dashboard');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/create', function () {
    return view('pages.create');
})->name('create_post');

Route::get('/myproject', [PageController::class, 'myproject'])->name('myproject');

Route::get('/project', function () {
    return view('pages.project');
})->name('project');

Route::get('/search', function(){
    return view('pages.search');
})->name('search');

Route::post('/register', [AuthController::class,'register'])->name('authRegister');

Route::post('/login', [AuthController::class,'login'])->name('authLogin');

Route::post('/logout', [AuthController::class,'logout'])->name('authLogout');

Route::post('/createpro', [CreateController::class, 'register'])->name('registerPro');

Route::delete('/deletepro', [DeleteProject::class, 'deletepro'])->name('deletepro');

Route::delete('/deleteuser', [DeleteUser::class, 'deleteuser'])->name('deleteuser');

Route::get('/getProId/{id}', [PageController::class, 'lihatpro'])->name('lihatpro');

Route::get('/search',[PageController::class, 'search'])->name('search');

Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

Route::get('/gantiPass', function(){
    return view('pages.changePassword');
})->name('ganti');