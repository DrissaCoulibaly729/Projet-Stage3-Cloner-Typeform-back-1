<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

Route::prefix('v1')->group(function () {
    // Routes pour User
    Route::get('users', [UserController::class, 'getAllUsers']);
    Route::get('users/{id}', [UserController::class, 'getUserById']);
    Route::post('users', [UserController::class, 'createUser']);
    Route::put('users/{id}', [UserController::class, 'updateUser']);
    Route::delete('users/{id}', [UserController::class, 'deleteUser']);

    // Routes pour Form
    Route::get('forms', [FormController::class, 'getAllForms']);
    Route::get('forms/{id}', [FormController::class, 'getFormById']);
    Route::post('forms', [FormController::class, 'createForm']);
    Route::put('forms/{id}', [FormController::class, 'updateForm']);
    Route::delete('forms/{id}', [FormController::class, 'deleteForm']);

    // Routes pour Question
    Route::get('questions', [QuestionController::class, 'getAllQuestions']);
    Route::get('questions/{id}', [QuestionController::class, 'getQuestionById']);
    Route::post('questions', [QuestionController::class, 'createQuestion']);
    Route::put('questions/{id}', [QuestionController::class, 'updateQuestion']);
    Route::delete('questions/{id}', [QuestionController::class, 'deleteQuestion']);

    // Routes pour Response
    Route::get('responses', [ResponseController::class, 'getAllResponses']);
    Route::get('responses/{id}', [ResponseController::class, 'getResponseById']);
    Route::post('responses', [ResponseController::class, 'createResponse']);
    Route::put('responses/{id}', [ResponseController::class, 'updateResponse']);
    Route::delete('responses/{id}', [ResponseController::class, 'deleteResponse']);
});

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});
