<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Esnbc as EsnbcResource;
use App\Http\Resources\EsnbcSubset as EsnbcSubsetResource;
use App\Http\Resources\EsnbcSubsetForQRCode as EsnbcSubsetForQRCodeResource;
use App\Esnbc;
use App\EsnbcSubset;

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

Route::get('getusers', 'UserController@getusers');

// http://127.0.0.1:8000/api/esnbcsubsets_for_mobile/5 - For QR code scan
Route::get('esnbcsubsets_for_mobile/{id}', function ($id) {
    $result = EsnbcSubset::where('id', '=', $id)->first();
    // print_r($result->esnbc->product_name);exit;
    return new EsnbcSubsetForQRCodeResource($result);
});

//////////////////////////// Esnbc ////////////////////////////////////////
Route::get('esnbcs/{batches_info}', function ($batches_info) {
    return new EsnbcResource(Esnbc::where('batches_info', '=', $batches_info)->first());
});

Route::get('esnbcs_for_fabric_get', function () {
    return new EsnbcResource(Esnbc::where('is_updated_to_fabric', '=', 0)->orderBy('updated_at','asc')->first());
});

Route::get('esnbcs_for_fabric_set/{batches_info}', function ($batches_info) {
    $result = Esnbc::where('batches_info', '=', $batches_info)->first();
    if($result->update_type == "Delete")
    {
        Esnbc::destroy($batches_info);
    }
    else
    {
        $result->is_updated_to_fabric = 1;
        $result->save();
    }

    return ['success' => true, 'error_msg' => ''];
});

//////////////////////////// EsnbcSubset ////////////////////////////////////////
Route::get('esnbc_subsets/{id}', function ($id) {
    return new EsnbcSubsetResource(EsnbcSubset::where('id', '=', $id)->first());
});

Route::get('esnbc_subsets_for_fabric_get', function () {
    return new EsnbcSubsetResource(EsnbcSubset::where('is_updated_to_fabric', '=', 0)->orderBy('updated_at','asc')->first());
});

Route::get('esnbc_subsets_for_fabric_set/{id}', function ($id) {
    $result = EsnbcSubset::where('id', '=', $id)->first();
    if($result->update_type == "Delete")
    {
        EsnbcSubset::destroy($id);
    }
    else
    {
        $result->is_updated_to_fabric = 1;
        $result->save();
    }

    return ['success' => true, 'error_msg' => ''];
});
