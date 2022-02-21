<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['post_id', 'name', 'email', 'comment'];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
