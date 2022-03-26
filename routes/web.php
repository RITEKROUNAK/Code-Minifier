<?php

/*
|--------------------------------------------------------------------------
| Web Routes for home page
|--------------------------------------------------------------------------
*/
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Routes to minify css code.
|--------------------------------------------------------------------------
*/
Route::get('/css-minify', 'HomeController@cssView');
Route::post('/css-minify', 'HomeController@minifyCss');


/*
|--------------------------------------------------------------------------
| Web Routes for minifying javascript code
|--------------------------------------------------------------------------
*/
Route::get('/js-minify', 'HomeController@jsView');
Route::post('/js-minify', 'HomeController@minifyJavascript');


/*
|--------------------------------------------------------------------------
| Web Routes for minifying HTML code
|--------------------------------------------------------------------------
*/
Route::get('/html-minify', 'HomeController@htmlView');
Route::post('/html-minify', 'HomeController@minifyHtml');


/*
|--------------------------------------------------------------------------
| This route will display about page
|--------------------------------------------------------------------------
*/
Route::get('/about', function (){
    return view('about');
});


/*
|--------------------------------------------------------------------------
| Web routes to manage contact page
|--------------------------------------------------------------------------
*/
Route::get('/contact', function (){
    return view('contact');
});
Route::post('/contact', 'HomeController@contact');


/*
|--------------------------------------------------------------------------
| This route will display an error page
|--------------------------------------------------------------------------
*/
Route::get('error', function (){
    return view('404');
});


/*
|--------------------------------------------------------------------------
| Redirect all non existing page to error page
|--------------------------------------------------------------------------
*/
Route::any('{catchall}', function() {
    return redirect('/error');
})->where('catchall', '.*');