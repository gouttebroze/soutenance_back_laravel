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

Route::get('/', function () {
    return view('template');
});

/*Route::get('1', function() { return 'Je suis la page 1 !'; });

Route::get('2', function() { return 'Je suis la page 2 !'; });

Route::get('3', function() { return 'Je suis la page 3 !'; });

Route::get('/hello/{name}', function ($name) {
    return view ('', ['name' => $name, 'msg' => 'Ciaos']);
});

Route::get('{n}', function($n) {
    return 'ALTERNATIVE VINTAGE ROCK ' . $n . ' !';
});*/

/*Route::get('/', function() {
    return view('vue1');
});*/

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*route contact*/
Route::get('contact', 'ContactsController@create')->name('contact.create');

Route::post('contact', 'ContactsController@store')->name('contact.store');

//Route::get('products', 'ProductController@index')->name('product.index');

//Route::get('products', 'ProductController@index')->name('product.show');

//Route::get('products', 'ProductController@edit');

/*routes products*/
Route::resource('products', 'ProductController');

Route::get('category/{name}/products', 'ProductController@index')->name('products.category');

/*routes photo/image*/
Route::get('photo', 'PhotoController@create');
Route::post('photo', 'PhotoController@store');

/*je crée un groupe de route qui necessiterons l'autentification
du client pour y accéder, en lui passant un middleware*/
Route::group(['middleware'  => ['auth']], function(){
    
    //Route::get('/panier', 'CartController')->name('cart.index');
    Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
});


/*routes card/panier*/
//Route::post('/panier', 'CartController@store')->name('cart.index'); 
//Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');

// A FINIR !!! route à rajouter pour vider le panier !!!
Route::get('/videpanier', function () {
    Cart::destroy();
});