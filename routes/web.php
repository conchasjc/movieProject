<?php
use App\post;
use Illuminate\Support\Facades\Route;

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

Route::Get('/', 'PagesController@index')->name('index');
Route::Get('/ManageMovies', 'PagesController@manage');
Route::Get('/Delete{id}','PostController@destroy');
Route::Get('/ManageMovies/Search/{id}','PostController@show');
Route::Get('/search','PostController@search');
Route::Get('/manageSearch','PostController@searchManage');
Route::Get('/ManageMovies',function(){
    $posts = post::orderBy('id','desc')->paginate(10);
    return view('Pages.manageMovies')->with('posts', $posts);
});
Route::Get('/movie/{id}','PostController@viewContent');
Route::Post('/addData','PostController@store')->name('addData');
Route::Post('/updateData{id}','PostController@update');

Route::Resource('/','PostController');

Route::Get('/add-to-cart/{id}',[
    'uses'=>'movieCart@getAddToCart',
    'as'=> 'movie.addtocart'
]);
Route::Get('/Movie-Cart',[
    'uses'=>'movieCart@getCart',
    'as'=> 'movie.cart'
]);