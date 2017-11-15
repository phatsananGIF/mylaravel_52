<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/about','SiteController@index')->name('about');

Route::get('/typebooks','TypeBooksController@index')->name('typebooks');
Route::get('/typebooks/destroy/{id}','TypeBooksController@destroy');

Route::get('/books','BooksController@index')->name('books');
Route::get('addBook','BooksController@create');
Route::post('btsubmit','BooksController@submit');



//Route::resource('books','BooksController');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


//-------test post-------------//
/*
Route::get('btsubmit', function () {
    return view ('books.create');
});


//รับค่าเฉพาะ a-z

Route::get('btsubmit/{id}', function ($id) {
    return 'ID = '.$id;
})->where('id','[a-z]');

//กรณีไม่มีค่าเริ่มต้นไป
Route::get('btsubmit/{id?}', function ($id='null') {
    return 'ID = '.$id;
});

//Route::post('btsubmit','BooksController@submit');
Route::post('btsubmit', function(Request $request){
   return $request->input('value2');
   
});
*/
