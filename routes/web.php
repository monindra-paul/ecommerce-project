<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TempImagesController;


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



Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){

        Route::get('/login',[LoginController::class,'index'])->name('admin.login.login');
        Route::post('/authenticate',[LoginController::class,'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

        
        // Category routes 
        Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
        Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
        Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.delete');


        // sub categories create
        Route::get('/sub-categories',[SubCategoryController::class,'index'])->name('sub-categories.index');
        Route::get('/sub-categories/create',[SubCategoryController::class,'create'])->name('sub-categories.create');
        Route::post('/sub-categories',[SubCategoryController::class, 'store'])->name('sub-categories.store');





        // Image Upload routes 
        Route::post('/upload-temp-image',[TempImagesController::class, 'create'])->name('temp-images.create');




        Route::get('/getSlug',function(Request $request){
            $slug = '';
            if(!empty($request->title)){
                $slug = Str::slug($request->title);
            }
            return response()->json([
                'status'=>true,
                'slug'=> $slug
            ]);
        })->name('getSlug');

    });


});