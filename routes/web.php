<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShipperController;

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

Route::get('/', [SiteController::class, 'index']);

Route::prefix('/shippers')->group(function () {
    Route::get('/get-all', [ShipperController::class, 'get_all']);
    // Route::get('/get-identity/{user_id}', [DocumentController::class, 'get_identity']);
    // Route::get('/get-residence/{user_id}', [DocumentController::class, 'get_residence']);
    // Route::get('/get-bank/{user_id}', [DocumentController::class, 'get_bank']);
    // Route::get('/get-payslip/{user_id}', [DocumentController::class, 'get_payslip']);
    // Route::post('/upload', [DocumentController::class, 'upload']);
    // Route::post('/delete', [DocumentController::class, 'delete']);
});

Route::prefix('/contacts')->group(function () {
    Route::get('/get/{id}', [ContactController::class, 'get']);
    Route::post('/make-primary', [ContactController::class, 'make_primary']);
    Route::post('/new', [ContactController::class, 'new']);
    Route::delete('/delete/{id}', [ContactController::class, 'delete']);
    // Route::get('/get-identity/{user_id}', [DocumentController::class, 'get_identity']);
    // Route::get('/get-residence/{user_id}', [DocumentController::class, 'get_residence']);
    // Route::get('/get-bank/{user_id}', [DocumentController::class, 'get_bank']);
    // Route::get('/get-payslip/{user_id}', [DocumentController::class, 'get_payslip']);
    // Route::post('/upload', [DocumentController::class, 'upload']);
    // Route::post('/delete', [DocumentController::class, 'delete']);
});
