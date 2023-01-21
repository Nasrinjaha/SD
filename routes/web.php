<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WebsiteController;

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

/*Route::get('/about/{category?}/{subcategory?}', function ($c=null,$sc=null) {
    if($c==null){
        $c='empty';
    }
    if($sc==null){
        $sc='empty';
    }
    return view('about',['category'=>$c,'subcategory'=>$sc]);
});*/


//Routes for CRUD

Route::get('/about/{category?}/{subcategory?}',[AboutController::class, 'about']);

Route::get('/create-employee',[EmployeeController::class,'createEmployee']);

Route::post('/store-employee',[EmployeeController::class,'storeEmployee']);

Route::get('/employees',[EmployeeController::class,'viewEmployees']);

Route::get('edit-employee/{id}',[EmployeeController::class,'editEmployee']);

Route::post('/update-employee/{id}',[EmployeeController::class,'updateEmployee']);


//Routes for website

Route::get('/website/home',[WebsiteController::class,'home']);
Route::get('/website/contact',[WebsiteController::class,'contact']);
Route::get('/website/about',[WebsiteController::class,'about']);


Route::get('/website/layout',[WebsiteController::class,'layout']);



// Routes for enroll managment

Route::get('/registration',[EmployeeController::class,'registration']);

Route::post('/store-employee',[EmployeeController::class,'storeEmployee']);




