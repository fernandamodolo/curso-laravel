<?php

use Illuminate\Support\Facades\Route;
Route::any('products/search','ProductController@search')->name('products.search');
Route::resource('products','ProductController'); //->middleware('auth')
/*
Route::delete('products/{id}','ProductController@destroy')->name('products.destroy');
Route::put('products/{id}','ProductController@update')->name('products.update');
Route::get('products/create','ProductController@create')->name('products.create');
Route::get('products','ProductController@index')->name('products.index');
Route::get('products/{id}','ProductController@show')->name('products.show');
Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');
Route::post('products','ProductController@store')->name('products.store');
*/

Route::get('/login',function(){
    return"Login";
}) ->name('login');

Route::get('/teste','Admin\TesteController@teste');

/*Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){

            Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
            Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
          
            Route::get('/produtos', 'TesteController@teste')->name('produtos') ;
    
            Route::get('/','TesteController@teste')->name('home');
            });

            
        });
        
    });
    
    
});*/

Route::group([
    'middleware'=>[],
    'prefix'=>'admin',
    'namespace'=>'Admin',
    'name'=>'admin.'

],function(){
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
          
    Route::get('/produtos', 'TesteController@teste')->name('produtos') ;
    
    Route::get('/',function(){
        return redirect()->route('admin.dashboard');
    })->name('home');


});



Route::get('/redirect3',function(){
    return redirect()->route('url.name'); 
 });

Route::get('/nome-url',function(){
    return"Hey hey hey";
}) ->name('url.name');

Route::view('/view','welcome');

Route::redirect('/redirect1','/redirect2');

// Route::get('/redirect1',function(){
//     return redirect('/redirect2'); 
// });

Route::get('/redirect2',function(){
    
    return 'Redirect2';
});

Route::get('/produtos/{idprod?}', function($idprod=''){
    return "produtos {$idprod}";
});
Route::get('/categoria/{flag}/posts',function($flag){
    return "Posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}',function($flag){
    return "produtos da categoria {$flag}";
});

Route::any('/any',function(){
    return 'any';
});

Route::match(['get','post'],'/match',function(){
    return 'match';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato',function(){
    return "Contato";
});

Route::get('/empresa',function(){
    return view('site.contact');
});