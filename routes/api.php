<?php

use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/minhas-informacoes', function(){
    return response()->json([
        'nome' => 'LARA PRANDO RAMOS DE MOURA',
        'NIF' => '3396'
    ]);
});

Route::apiResource('/sports', SportController::class);
Route::apiResource('/locales', LocaleController::class);
Route::apiResource('/competitors', CompetitorController::class);
Route::apiResource('/trainers', TrainerController::class);