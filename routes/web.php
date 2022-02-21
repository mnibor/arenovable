<?php

Auth::routes();
Route::get('backend-admin', 'Admin\BackendController@index')->name('backend-admin');
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('users', 'Admin\UserController');
Route::resource('replies', 'Admin\CommentController');

//Web Routes
Route::get('/', 'BlogController@index')->name('index');
Route::get('blog/{slug}', 'BlogController@show')->name('post');
Route::get('category/{slug}', 'BlogController@category')->name('category');
Route::get('tag/{slug}', 'BlogController@tag')->name('tag');
Route::get('author/{slug}', 'BlogController@author')->name('author');

Route::post('comments', 'CommentsController@store')->name('comments');

Route::get('about_us', 'BlogController@about')->name('about_us');

Route::get('/images/{path}/{image}', function($path, $image) {
    $storagePath = Storage::disk($path)->getDriver()->getAdapter()->getPathPrefix();
    $imageFilePath = $storagePath . $image;

    if(File::exists($imageFilePath)) {
        return Image::make($imageFilePath)->response();
    }
});

Route::get('/configurar-cache', function() {
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
});
