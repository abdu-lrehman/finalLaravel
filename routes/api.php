<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionsController;


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

Route::get('questionsave', [QuestionsController::class, 'store']);
Route::get('questionshow', [QuestionsController::class, 'show']);
Route::get('questionupdate', [QuestionsController::class, 'update']);
Route::get('questiondelete', [QuestionsController::class, 'destroy']);


Route::get('quizsave', [QuizController::class, 'store']);
Route::get('quizshow', [QuizController::class, 'show']);
Route::get('quizupdate', [QuizController::class, 'update']);
Route::get('quizdelete', [QuizController::class, 'destroy']);