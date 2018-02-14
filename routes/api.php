<?php

use Illuminate\Http\Request;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', function () {
    //return response(['Product 1', 'Product 2', 'Product 3'],200);
    return response(Product::all(),200);
});
 
Route::get('products/{product}', function ($productId) {
    //return response()->json(['productId' => "{$productId}"], 200);
     return response(Product::find($productId), 200);
});
  
 
Route::post('products', function() {
    //return  response()->json([
    //        'message' => 'Create success'
    //    ], 201);
    $resp = Product::create($request->all());
    return $resp;
});
 
Route::put('products/{product}', function() {
  //return  response()->json([
   //         'message' => 'Update success'
    //    ], 200);
   $product = Product::findOrFail($productId);
   $product->update($request->all());
   return $product;
});
 
Route::delete('products/{product}',function() {
    //return  response()->json(null, 204);
    Product::find($productId)->delete();
 
    return 204;
});
*/

Route::get('products', 'ProductsController@index');
 
Route::get('products/{product}', 'ProductsController@show');
 
Route::post('products','ProductsController@store');
 
Route::put('products/{product}','ProductsController@update');
 
Route::delete('products/{product}', 'ProductsController@delete');