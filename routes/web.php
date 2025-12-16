<?php

use App\Http\Controllers\Admin\Aboutme\AboutmeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Catalog\CategoryController;
use App\Http\Controllers\Admin\Catalog\CatalogController;
use App\Http\Controllers\Admin\Catalog\CatalogProductController;
use App\Http\Controllers\Admin\Landing\LandingController;
use App\Http\Controllers\Admin\Landing\WhoweareController;
use App\Http\Controllers\Admin\Logocatalog\LogoController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Website\About\AboutController;
use App\Http\Controllers\Website\Catalog\LogoCatalogController;
use App\Http\Controllers\Website\Catalog\WebsiteCatalogController;
use App\Http\Controllers\Website\Hero\HomeController;
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

// admin 

Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {

// Dashboard Page
Route::get('admin/dashboard', fn() => view('admin.layout.dashboard'))->name('admin.dashboard');
Route::get('admin/landing', [LandingController::class, 'index'])->name('admin.landing.index');
Route::get('admin/landing/create', [LandingController::class, 'create'])->name('admin.landing.create');
Route::post('admin/landing/store', [LandingController::class, 'store'])->name('admin.landing.store');
Route::get('admin/landing/edit/{id}', [LandingController::class, 'edit'])->name('admin.landing.edit');
Route::post('admin/landing/update/{id}', [LandingController::class, 'update'])->name('admin.landing.update');
Route::delete('admin/landing/delete/{id}', [LandingController::class, 'destroy'])->name('admin.landing.delete');

// who we are landing page 
Route::get('admin/whoweare', [WhoweareController::class, 'index'])->name('admin.whoweare.index');
Route::get('admin/create/whoweare', [WhoweareController::class, 'create'])->name('admin.whoweare.create');
Route::post('admin/store/whoweare', [WhoweareController::class, 'store'])->name('admin.whoweare.store');
Route::get('admin/edit/whoweare/{id}', [WhoweareController::class, 'edit'])->name('admin.whoweare.edit');
Route::post('admin/update/whoweare/{id}', [WhoweareController::class, 'update'])->name('admin.whoweare.update');
Route::delete('admin/delete/whoweare/{id}', [WhoweareController::class, 'destroy'])->name('admin.whoweare.delete');

// about page

// SHOW LIST PAGE
Route::get('admin/aboutme', [AboutmeController::class, 'index'])->name('admin.aboutpage.index');
Route::get('admin/create/aboutme', [AboutmeController::class, 'create'])->name('admin.aboutpage.create');
Route::post('admin/store/aboutme', [AboutmeController::class, 'store'])->name('admin.aboutpage.store');
Route::get('admin/edit/aboutme/{id}', [AboutmeController::class, 'edit'])->name('admin.aboutpage.edit');
Route::post('admin/update/aboutme/{id}', [AboutmeController::class, 'update'])->name('admin.aboutpage.update');
Route::delete('admin/delete/aboutme/{id}', [AboutmeController::class, 'destroy'])->name('admin.aboutpage.delete');

// catalog List
// Catalog Category Routes
Route::get('admin/website/catalog-list',[CatalogController::class, 'index'])->name('admin.website.catalog');
Route::get('admin/website/catalog/categories/create',[CatalogController::class, 'create'])->name('admin.website.catalog.create');
Route::post('admin/website/catalog/categories/store',[CatalogController::class, 'store'])->name('admin.website.catalog.category.store');
Route::get('admin/website/catalog/{id}/edit', [CatalogController::class, 'edit'])->name('admin.website.catalog.edit');
Route::put('admin/website/catalog/{id}/update', [CatalogController::class, 'update'])->name('admin.website.catalog.update');
Route::delete('admin/website/catalog/{id}/delete', [CatalogController::class, 'destroy'])->name('admin.website.catalog.delete');

// Website catalog product 
Route::get('admin/website/catalog-product', [CatalogProductController::class, 'index'])->name('admin.website.catalog.product');
Route::get('admin/website/catalog-product/create',[CatalogProductController::class, 'create'])->name('admin.website.catalog.product.create');
Route::post('admin/website/catalog-product/store',[CatalogProductController::class, 'store'])->name('admin.website.catalog.product.store');
Route::get('admin/website/catalog-product/{id}/edit',[CatalogProductController::class, 'edit'])->name('admin.website.catalog.product.edit');
Route::post('admin/website/catalog-product/{id}/update',[CatalogProductController::class, 'update'])->name('admin.website.catalog.product.update');
Route::delete('admin/website/catalog-product/{id}',[CatalogProductController::class, 'destroy'])->name('admin.website.catalog.product.destroy');

// logo catalog

// INDEX
Route::get('admin/logo/catalog-product',[LogoController::class, 'index'])->name('admin.logo.catalog.product.index');
Route::get('admin/logo/catalog-product/create',[LogoController::class, 'create'])->name('admin.logo.catalog.product.create');
Route::post('admin/logo/catalog-product/store',[LogoController::class, 'store'])->name('admin.logo.catalog.product.store');
Route::get('admin/logo/catalog-product/{id}/edit',[LogoController::class, 'edit'])->name('admin.logo.catalog.product.edit');
Route::post('admin/logo/catalog-product/{id}/update',[LogoController::class, 'update'])->name('admin.logo.catalog.product.update');
Route::delete('admin/logo/catalog-product/{id}/delete',[LogoController::class, 'destroy'])->name('admin.logo.catalog.product.delete');

// setting
Route::get('admin/setting', [SettingController::class, 'index'])->name('admin.setting');
Route::post('admin/setting/update-password', [SettingController::class, 'updatePassword'])->name('admin.setting.updatePassword');
Route::post('admin/setting/update-email', [SettingController::class, 'updateEmail'])->name('admin.setting.updateEmail');

});



// website
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [AboutController::class, 'index'])->name('about');
Route::get('/catalog', fn() => view('Website.Catalog.Catalog'))->name('catalog');
Route::get('website-catalog', [WebsiteCatalogController::class, 'index'])->name('websitecatalog');
Route::get('website-catalog-list/{slug}',[WebsiteCatalogController::class, 'catalogList'])->name('websitecatalog.list'); 
 
Route::get('logo-catalog', [LogoCatalogController::class, 'index'])->name('logocatalog');