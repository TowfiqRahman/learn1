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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome1', function () {
    return view('welcome1');
});

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/about1', function () {
    return view('about1',[
      'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test', function () {
    //$name = srequest('name');
    return view('test',[
      'nameee' => request('name')
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

/*Route::get('/posts/{post}', function ($post) {

    $posts = [
      'my-first-post' => 'Hello, this is my first bloge post',
      'my-second-post' => 'Hello, this is my second blog post'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404, 'Sorry, the post was not found');
    }

    return view('post',[
      'post' => $posts[$post]
    ]);
});
*/
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return "HI returned from the string directly!";
});

Route::get('/jsonarray', function () {
    return ['foo' => 'bar'];
});
