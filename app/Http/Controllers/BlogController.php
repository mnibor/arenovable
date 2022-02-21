<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use App\Comments;
use App\User;

class BlogController extends Controller
{
    public function index(){
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        $posts = Post::orderBy('created_at', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        return view('index', compact('posts', 'tags', 'categories', 'popular', 'postRandom'));
    }

    public function show($slug){
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        $postSuggest = Post::where('status', 'PUBLISHED')->get()->random(3);
        $post = Post::where('slug', $slug)->first();
        $comments = Comments::where('post_id', $post->id)->orderBy('created_at', 'DESC')->get();
        $post->increment('view_count');
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        return view('blog.detail', compact('post', 'tags', 'categories', 'comments', 'popular', 'postRandom', 'postSuggest'));

    }

    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        $categoryName = $category->name;
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        return view('index', compact('posts', 'tags', 'categories', 'categoryName', 'popular', 'postRandom'));
    }

    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        $tagName = $tag->name;
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('created_at', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        return view('index', compact('posts', 'tags', 'categories', 'tagName', 'popular', 'postRandom'));
    }

    public function author($slug){
        $user = User::where('slug', $slug)->first();
        $authorName = $user->name;
        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'DESC')->where('status', 'PUBLISHED')->paginate(5);
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        return view('index', compact('posts', 'tags', 'categories', 'authorName', 'popular', 'postRandom'));
    }

    public function about(){
        $tags = Tag::has('posts')->orderBy('name', 'ASC')->get();
        $categories = Category::has('posts')->orderBy('name', 'ASC')->get();
        $popular = Post::orderBy('view_count', 'desc')->take(10)->get();
        $postRandom = Post::where('status', 'PUBLISHED')->get()->random(1);
        return view('about_us', compact('categories', 'tags', 'popular', 'postRandom'));
    }
}
