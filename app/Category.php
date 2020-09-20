<?php

namespace App;

use App\Post;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable=['name'];

    public function post(){
        return $this->hasMany(Post::class);
    }
}
