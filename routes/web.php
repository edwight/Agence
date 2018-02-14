<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Plato;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;



Route::get('/', function () {
	//lista 
	$platos = Plato::all();
    return view('plato_index', ['platos'=>$platos]);
});

Route::get('/users',function(){
	$user = User::all();
	return $user;
})->middleware('auth','role:admin');

Route::get('/cart/{id}', function ($id) {
	$plato = Plato::find($id);
	//return $platos;
	//Auth::user()->id
	$cart = Cart::where('plato_id',$id)->first();
	$id = Auth::id();
	if($cart){
		$cart->increment('cantidad'); //increment('count',2);
	    $cart->save();
	    return redirect('cartItem');
	}
	else{
		$cart = new Cart;
		$cart->name = $plato->name;
		$cart->precio = $plato->precio;
		$cart->cantidad = +1;
		$cart->user_id = $id;
	    //return view('plato_index', ['platos'=>$platos]);
	    $cart->plato_id = $plato->id;
	    $cart->save();
	    return redirect('cartItem');
	}
	
    
});
Route::get('cartItem',function(){
	$id = Auth::id();
	$carts = Cart::where('user_id',$id)->get();
	foreach ($carts as $cart) {
		echo '<br><strong>plato_id:</strong>'.$cart->plato_id;
		echo '<br>nombre:'.$cart->name;
		echo "<br>cantidad:".$cart->cantidad;
		echo "<br>precio".$cart->precio;
	}
});
/*
Route::get('/platos/add',function(){
	$category = Category::find(1);
	$platos = new Plato;
	$platos->name = "cafes";
	$category->platos()->save($platos);
});
Route::get('/category/add',function(){
	$category = new Category;
	$category->name = "cafes";
	$category->save();
	return redirect('/platos/add');
});
Route::get('/user/add',function(){
	$user = new User;
	$user->name = "edwar";
	$user->email = "edwar@gmail.com";
	$user->save();
	return redirect('/category/add');
});

Route::get('/platos/card',function(){
	$user = Category::find(1);
	$platos = Plato::find(1);
	$user->platos()->precio = "40";
	$user->platos()->cantidad = "3";
	$user->platos()->total = "120";
	$user->platos()->attach($platos);
	$user->save();
});
*/
Route::get('/category', function () {
	//lista 
	$categorys = Category::all();
	//return $category;
    return view('category',['categorys'=>$categorys]);
});
Route::get('/category/{id}', function ($id) {
	//lista 
	$category = Category::find($id);
	//return $category;
    //return view('category',['categorys'=>$categorys]);
    echo $category->name;
});
/*
Route::get('/category/show', function () {
	//lista 
	$category = Category::find(1);
	echo ' id: '.$category->id;
	echo ' titulo: '.$category->name;
	//echo ' platos: '.$category->platos()->name;
	foreach ($category->platos as $platos ) {
		echo "<br> platos ".$platos->name;
	}
    //return view('welcome');
});

Route::get('show/{id}', function ($id) {
	//lista 
	$plato = Plato::find($id);
	//echo ' id: '.$plato->id;
	//echo ' titulo: '.$plato->name;
	//echo ' categoria:'.$platos->categoria->name;
    return view('plato_show', ['plato'=>$plato]);
});

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/solo_admin', 'HomeController@someAdminStuff')->name('soloAdmin');
