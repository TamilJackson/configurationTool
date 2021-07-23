<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ExComponentController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ExtensionsController;
use App\Http\Controllers\LanguageController;

use App\Http\Controllers\SystemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApisetController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SourcedataController;
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

Auth::routes(['verify' => true]);

//Application Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [UsersController::class, 'index'])->name('users-list');

    Route::get('systemsourcedata/{id}', [SourcedataController::class, 'systemsourcedata'])->name('systemsourcedata');
    Route::get('sourcedata/lms', [SourcedataController::class, 'lms'])->name('sourcedata-lms');
    Route::get('sourcedata/sis', [SourcedataController::class, 'sis'])->name('sourcedata-sis');
    Route::get('sourcedata/dbmsystem', [SourcedataController::class, 'dbmsystem'])->name('sourcedata-dbmsystem');
    Route::get('sourcedata/testdbmsystem', [SourcedataController::class, 'testdbmsystem'])->name('sourcedata-testdbmsystem');
    Route::post('sourcedata/connectdbmsystem', [SourcedataController::class, 'connectdbmsystem'])->name('connectdbmsystem');

    Route::get('sourcedata/crm', [SourcedataController::class, 'crm'])->name('sourcedata-crm');
    Route::get('sourcedata/filesystem', [SourcedataController::class, 'filesystem'])->name('sourcedata-filesystem');
    
    Route::get('sourcedata/qualitylevel', [SourcedataController::class, 'qualitylevel'])->name('sourcedata-qualitylevel');
    Route::get('sourcedata/dbqualitylevel/{dir}', [SourcedataController::class, 'dbqualitylevel'])->name('sourcedata-dbqualitylevel');
    Route::get('sourcedata/rules', [SourcedataController::class, 'rules'])->name('sourcedata-rules');
    

    // System Route
    Route::get('systems/list', [SystemController::class, 'index'])->name('systems-list');
    Route::get('systems/add', [SystemController::class, 'create'])->name('systems-add');
    Route::post('systems/store', [SystemController::class, 'store'])->name('systems-store');
    Route::get('systems/view/{id}', [SystemController::class, 'show'])->name('systems-view');
    Route::get('systems/edit/{id}', [SystemController::class, 'edit'])->name('systems-edit');
    Route::post('systems/update/{id}', [SystemController::class, 'update'])->name('systems-update');
    Route::get('systems/products', [SystemController::class, 'products'])->name('systems-products');

    // Product Route
    Route::get('products/list', [ProductController::class, 'index'])->name('products-list');
    Route::get('products/add', [ProductController::class, 'create'])->name('products-add');
    Route::post('products/store', [ProductController::class, 'store'])->name('products-store');
    Route::get('products/view/{id}', [ProductController::class, 'show'])->name('products-view');
    Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products-edit');
    Route::post('products/update/{id}', [ProductController::class, 'update'])->name('products-update');

    // Apiset Route
    Route::get('apiset/list', [ApisetController::class, 'index'])->name('apiset-list');
    Route::get('apiset/add', [ApisetController::class, 'create'])->name('apiset-add');
    Route::post('apiset/store', [ApisetController::class, 'store'])->name('apiset-store');
    Route::get('apiset/view/{id}', [ApisetController::class, 'show'])->name('apiset-view');
    Route::get('apiset/edit/{id}', [ApisetController::class, 'edit'])->name('apiset-edit');
    Route::post('apiset/update/{id}', [ApisetController::class, 'update'])->name('apiset-update');

    // User Route
    Route::get('users/list', [UsersController::class, 'index'])->name('users-list');
    Route::get('users/add', [UsersController::class, 'create'])->name('users-add');
    Route::post('users/store', [UsersController::class, 'store'])->name('users-store');
    Route::get('users/view/{id}', [UsersController::class, 'show'])->name('users-view');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users-edit');
    Route::post('users/update/{id}', [UsersController::class, 'update'])->name('users-update');
    // Role Route
    Route::get('roles/list', [RolesController::class, 'index'])->name('roles-list');
    Route::get('roles/add', [RolesController::class, 'create'])->name('roles-add');
    Route::post('roles/store', [RolesController::class, 'store'])->name('roles-store');
    Route::get('roles/view/{id}', [RolesController::class, 'show'])->name('roles-view');
    Route::get('roles/edit/{id}', [RolesController::class, 'edit'])->name('roles-edit');
    Route::post('roles/update/{id}', [RolesController::class, 'update'])->name('roles-update');
});


// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap'])->name('lang-locale');
