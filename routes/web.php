<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\MayorWordsController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\MunicipalityTypesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('pages.backend.index');
})->name('admin.dashboard');

Route::prefix('admin')->group(function () {
    Route::resource('news', NewsController::class)->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'show' => 'admin.news.show',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'delete' => 'admin.news.delete',
    ]);

    Route::resource('abouts', AboutsController::class)->names([
        'index' => 'admin.abouts.index',
        'create' => 'admin.abouts.create',
        'store' => 'admin.abouts.store',
        'show' => 'admin.abouts.show',
        'edit' => 'admin.abouts.edit',
        'update' => 'admin.abouts.update',
        'delete' => 'admin.abouts.delete',
    ]);

    Route::resource('carousels', CarouselsController::class)->names([
        'index' => 'admin.carousels.index',
        'create' => 'admin.carousels.create',
        'store' => 'admin.carousels.store',
        'show' => 'admin.carousels.show',
        'edit' => 'admin.carousels.edit',
        'update' => 'admin.carousels.update',
        'delete' => 'admin.carousels.delete',
    ]);

    Route::resource('mayor-words', MayorWordsController::class)->names([
        'index' => 'admin.mayor-words.index',
        'create' => 'admin.mayor-words.create',
        'store' => 'admin.mayor-words.store',
        'show' => 'admin.mayor-words.show',
        'edit' => 'admin.mayor-words.edit',
        'update' => 'admin.mayor-words.update',
        'delete' => 'admin.mayor-words.delete',
    ]);

    Route::resource('municipalities', MunicipalitiesController::class)->names([
        'index' => 'admin.municipalities.index',
        'create' => 'admin.municipalities.create',
        'store' => 'admin.municipalities.store',
        'show' => 'admin.municipalities.show',
        'edit' => 'admin.municipalities.edit',
        'update' => 'admin.municipalities.update',
        'delete' => 'admin.municipalities.delete',
    ]);

    Route::resource('municipality-types', MunicipalityTypesController::class)->names([
        'index' => 'admin.municipality-types.index',
        'create' => 'admin.municipality-types.create',
        'store' => 'admin.municipality-types.store',
        'show' => 'admin.municipality-types.show',
        'edit' => 'admin.municipality-types.edit',
        'update' => 'admin.municipality-types.update',
        'delete' => 'admin.municipality-types.delete',
    ]);

    Route::resource('services', ServicesController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'show' => 'admin.services.show',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'delete' => 'admin.services.delete',
    ]);

    Route::resource('teams', TeamsController::class)->names([
        'index' => 'admin.teams.index',
        'create' => 'admin.teams.create',
        'store' => 'admin.teams.store',
        'show' => 'admin.teams.show',
        'edit' => 'admin.teams.edit',
        'update' => 'admin.teams.update',
        'delete' => 'admin.teams.delete',
    ]);
});

Route::get('/home-admin', function () {
    return view('pages.backend.index');
});
