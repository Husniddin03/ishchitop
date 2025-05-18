<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ContactViewController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Worker endpoints
|--------------------------------------------------------------------------
*/
Route::get('/workers', [WorkerController::class, 'index']);
Route::post('/workers', [WorkerController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Profession (Kasblar) endpoints
|--------------------------------------------------------------------------
*/
Route::get('/professions', [ProfessionController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Contact viewing endpoints
|--------------------------------------------------------------------------
*/
Route::post('/contacts/view', [ContactViewController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Payments endpoints
|--------------------------------------------------------------------------
*/
Route::post('/payments', [PaymentController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Reviews endpoints
|--------------------------------------------------------------------------
*/
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/workers/{worker_id}/reviews', [ReviewController::class, 'getWorkerReviews']);