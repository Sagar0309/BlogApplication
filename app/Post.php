<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    //

    protected $table = 'post';
    public $timestamps = false;
    protected $fillable=['title','slug','excerpt','body','category_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
