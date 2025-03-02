<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterClassController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\SchoolController;

Route::get('/teste', function () {
    return view('welcome');
});

Route::get('/classes', [CharacterClassController::class, 'index']);
Route::get('/spells', [SpellController::class, 'index']);
Route::get('/schools', [SchoolController::class, 'index']);

# API group

Route::prefix('api')->group(function () {
    Route::get('/classes', [CharacterClassController::class, 'index']);
    Route::get('/spells', [SpellController::class, 'index']);
    Route::get('/schools', [SchoolController::class, 'index']);
});