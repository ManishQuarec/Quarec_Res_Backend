<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ResumeController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\JobPositionController;
use App\Http\Controllers\Api\CurrentOpeningcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/addcontact',[ContactController::class,'addcontact']);
Route::post('/addresume',[ResumeController::class,'addResume']);
Route::get('/getcategory',[CategoryController::class,'getCategory']);
Route::get('/job_title',[JobPositionController::class,'getJobPosition']);
Route::get('/getportfolio/{name?}',[PortfolioController::class,'getPortfolio']);
Route::get('/getpost',[PostController::class,'getCategoryPost']);
Route::get('/getopening',[CurrentOpeningcontroller::class,'getCurrentOpening']);




