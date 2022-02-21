<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;
use App\Tag;
use App\User;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $users = User::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.posts.create', compact('categories', 'tags', 'users'));
    }

    public function store(PostStoreRequest $request)
    {
        //Validación

        $post = Post::create($request->all());

        if($request->file('image')) {
            $path = Storage::disk('posts')->put('/', $request->file('image'));
            $post->fill(['image' => $path])->save();
        }

        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
        ->with('info', 'El Artículo fue creado exitosamente');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $users = User::orderBy('name', 'ASC')->pluck('name', 'id');

        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'users'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);

        $post->fill($request->all())->save();

        if($request->file('image')) {
            $path = Storage::disk('posts')->put('/', $request->file('image'));
            $post->fill(['image' => $path])->save();
        }

        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'El Artículo fue modificado exitosamente');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return back()->with('info', 'El Artículo fue eliminado exitosamente');
    }
}
