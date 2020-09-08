<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }

    public function blog($id, $author = 'author by default')
    {
        // return $id . " author is : $author";
        $posts = [

            1 => ['title' => '<a>Learn Laravel</a>'],
            2 => ['title' => 'learn Angular']
        ];

        return view('posts.show', [

            'data' => $posts[$id],
            'author' => $author
        ]);
    }
}
