<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TempImagesController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\PresenceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProductSubCategoryController;
use App\Http\Controllers\Fronend\CartController;
use App\Http\Controllers\Fronend\CategoryController as FronendCategoryController;
use App\Http\Controllers\Fronend\ContactController;
use App\Http\Controllers\Fronend\CoursesController;
use App\Http\Controllers\Fronend\EventController;
use App\Http\Controllers\Fronend\FranchiseController;
use App\Http\Controllers\Fronend\HomeController;
use App\Http\Controllers\Fronend\PagesController;
use App\Http\Controllers\Fronend\ShopController;

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

// Route::get('/', function () {

//     return view('welcome');

// });


//admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [LoginController::class, 'index'])->name('admin.login.login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');


        // Category routes 
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');


        // sub categories route
        Route::get('/sub-categories', [SubCategoryController::class, 'index'])->name('sub-categories.index');
        Route::get('/sub-categories/create', [SubCategoryController::class, 'create'])->name('sub-categories.create');
        Route::post('/sub-categories', [SubCategoryController::class, 'store'])->name('sub-categories.store');
        Route::get('/sub-categories/{subCategory}/edit', [SubCategoryController::class, 'edit'])->name('sub-categories.edit');
        Route::put('/sub-categories/{subCategory}', [SubCategoryController::class, 'update'])->name('sub-categories.update');
        Route::delete('/sub-categories/{subCategory}', [SubCategoryController::class, 'destroy'])->name('sub-categories.delete');


        //brands routes
        Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
        Route::get('/brands/create', [BrandController::class, 'create'])->name('brands.create');
        Route::post('/brands', [BrandController::class, 'store'])->name('brands.store');
        Route::get('/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
        Route::put('/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
        Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.delete');


        //Franchisee routes
        Route::get('/franchisee', [PresenceController::class, 'index'])->name('presences.index');
        Route::get('/franchisee/create', [PresenceController::class, 'create'])->name('presences.create');
        Route::post('/franchisee', [PresenceController::class, 'store'])->name('presences.store');
        Route::get('/franchisee/{presences}/edit', [PresenceController::class, 'edit'])->name('presences.edit');
        Route::put('/franchisee/{presences}', [PresenceController::class, 'update'])->name('presences.update');
        Route::delete('/products/{product}', [PresenceController::class, 'destroy'])->name('presences.delete');
        // Route::get('/get-product', [ProductController::class, 'getProducts'])->name('products.getProducts');


        Route::get('/product-subcategories', [ProductSubCategoryController::class, 'index'])->name('product-subcategories.index');


        Route::post('/product-images/update', [ProductImageController::class, 'update'])->name('product-images.update');
        Route::delete('/product-images', [ProductImageController::class, 'destroy'])->name('product-images.destroy');

        // Image Upload routes 
        Route::post('/upload-temp-image', [TempImagesController::class, 'create'])->name('temp-images.create');



        Route::get('/contact', [AdminContactController::class, 'index'])->name('contactapplication');
        Route::put('/contact/{id}', [AdminContactController::class, 'update'])->name('contactapplication.update');
        Route::get('/contact/{id}', [AdminContactController::class, 'show'])->name('contactapplication.id');





        Route::get('/getSlug', function (Request $request) {
            $slug = '';
            if (!empty($request->title)) {
                $slug = Str::slug($request->title);
            }
            return response()->json([
                'status' => true,
                'slug' => $slug
            ]);
        })->name('getSlug');
    });
});


// frontend routes

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/events', [EventController::class, 'events'])->name('events');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/our-presence', [PagesController::class, 'contact'])->name('presence');
Route::post('/our-presence', [ContactController::class, 'postContact'])->name('postcontact');


Route::get('/apply-franchise', [FranchiseController::class, 'franchise'])->name('franchise');
Route::post('/apply-franchise', [FranchiseController::class, 'postfranchisee'])->name('postfranchisee');


Route::group(['prefix' => 'courses'], function () {

    Route::get('/abacus', [CoursesController::class, 'abacus'])->name('course.abacus');
    Route::get('/vedic-math', [CoursesController::class, 'vedicmath'])->name('course.vedicmath');
});


Route::group(['prefix' => 'career-opportunities'], function () {

    Route::get('/franchise-career', [PagesController::class, 'franchise'])->name('franchise.career');
    Route::get('/career', [PagesController::class, 'career'])->name('career.oppor');
});











Route::post('/contact', [ContactController::class, 'postContact'])->name('front.postcontact');
