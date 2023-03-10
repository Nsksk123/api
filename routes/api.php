<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/login', App\Http\Controllers\Api\Admin\LoginController::class, ['as' => 'admin', 'as' => 'auth']);

        //group route with middleware "auth:api"
        Route::group(['middleware' => 'auth:api'], function() {

            //route user logged in
            Route::get('/user', function (Request $request) {
                return $request->user();
            })->name('user');

            //route logout
                Route::post('/logout', App\Http\Controllers\Api\Admin\LogoutController::class, ['as' => 'admin']);
                Route::apiResource('/consultations', App\Http\Controllers\Api\Admin\ConsultationController::class);
                Route::apiResource('/spots', App\Http\Controllers\Api\Admin\SpotController::class);
                Route::apiResource('/users', App\Http\Controllers\Api\Admin\UserController::class);
                Route::apiResource('/roles', App\Http\Controllers\Api\Admin\StatusController::class);
                Route::apiResource('/showconsultations', App\Http\Controllers\Api\Admin\ShowConsultationController::class);
                Route::apiResource('/editconsultations', App\Http\Controllers\Api\Admin\EditConsulController::class);
                Route::apiResource('/vaccinations', App\Http\Controllers\Api\Admin\VaccinationController::class);
                Route::post('/spots', 'App\Http\Controllers\Api\Admin\SpotController@updateStock');
        });
    }
    );
});
