<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            '1' => 'My forst post',
            '2' => 'My second post'
        ];

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
