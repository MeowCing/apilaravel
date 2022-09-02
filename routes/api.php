<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

//Route :: get('belajar-api',function(){
//    return response()->json([
//        'msg'=>'success',
//        'data'=> [
//            'msg'=> 'Belajar API',
//            'status' => 'true',
//        ]
//    ]);
//});

//Nyoba Route {}
//Route::get('get-category', [CategoryController::class,'index']);
Route::apiResource('category',CategoryController::class);
