<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function show($slug){

    //  $post = \DB::table('posts')->where('slug', $slug)->first();
      $post = Post::where('slug', $slug)->firstorFail();

    /*  if(! $post){
          abort(404);
      }
      */
    //  dd($post);

    //  $posts = [
    //  'my-first-post' => 'Hello, this is my first bloge post',
    //  'my-second-post' => 'Hello, this is my second blog post'
    //  ];

    /*  if(! array_key_exists($post, $posts)){
          abort(404, 'Sorry, the post was not found');
      }
    */
      return view('post',[
        'post' => $post
      ]);
    }
}
