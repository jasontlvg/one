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

use App\User;
use App\Author;
use App\Book;

Route::get('/', function () {

//    $books= Author::with('books')->get();
//    $books= Author::with('books')->where('id',1)->get();
//    $books= Author::find(1)->books->where('title','Libra');
//    return $books;
//    $authors= Author::has('books', '>=',3)->with('books')->get();
//    $authors = Author::whereHas('books', function ($query) {
//        $query->where('title', 'like', 'Wolf');
//    })->with('books')->get();
//    return $author;
//    $books= (Author::find(1)->books);
//    foreach($books as $book){
//        $book->chapters;
////        return $book->chapters;
//    }


    return view('probe', compact('authors'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login-admin', 'Auth\AdminLoginController@index')->name('adminLogin');
