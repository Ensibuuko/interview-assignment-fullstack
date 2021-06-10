<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/transactions','TransactionController@index');
Route::get('/saccos','TransactionController@transactionsBySacco');
Route::get('/individuals','TransactionController@transactionsByIndividual');


// Route::prefix('/transactions')->group(function (){
//  Route::post('/store', [TransactionController::class, 'store']);
//  Route::put('/{id}', [TransactionController::class, 'update']);4
// Route::delete('/{id}', [TransactionController::class, 'destroy']);
// });
