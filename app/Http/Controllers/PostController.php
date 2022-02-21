<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function show(Post $post) {
		$comments = $post->comment()->paginate(2);
		return view('blog.detail', compact('post', 'comments'));
	}
}
