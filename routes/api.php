<?php

use App\Http\Controllers\Api\v1\EmployeController;
use App\Http\Controllers\Api\v1\SkillController;
use App\Http\Controllers\Api\v1\JobController;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('v1')->group(function(){
    Route::get('jobs',[JobController::class,'index']);
    Route::post('jobs',[JobController::class,'store']);
 });

Route::prefix('v1')->group(function(){
   Route::apiResource('employees',EmployeController::class);
});

Route::prefix('v1')->group(function(){
    Route::get('skills', [SkillController::class,'index']);
    Route::post('skills',[SkillController::class,'store']);
});

Route::prefix('v1')->group(function(){
    Route::post('employeeskill/'   , [SkillController::class  ,'setEmployeSkill']);
    Route::get('employeeskill/{id}', [SkillController::class  ,'getEmployeSkills']);
});
    