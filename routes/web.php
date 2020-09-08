<?php

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

//getting values in routes
// Route::get('/posts/{id}/{author}',function($id,$author){

//     // return $id . " author is : $author";

//     $posts = [

//         1 => ['title' => 'learn laravel','author'=>$author],
//         2 => ['title' => 'learn Angular','author' => $author]
//     ];

//     return view('posts.show',[

//         'data' => $posts[$id]
//     ]);

// });

Route::get('/posts/{id}/{author?}', function ($id, $author = 'author by default') {

    // return $id . " author is : $author";
    $posts = [

        1 => ['title' => '<a>Learn Laravel</a>'],
        2 => ['title' => 'learn Angular']
    ];

    return view('posts.show', [

        'data' => $posts[$id],
        'author' => $author
    ]);
});

// Route::get('/', function () {
//     return view('home');
// });

//statique view
Route::view('/','home');

// Route::get('/about', function () {
//     return view('about');
// });

//statique view
Route::view('/about', 'about');