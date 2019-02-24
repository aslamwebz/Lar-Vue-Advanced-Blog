<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ([
    	'slug','author_id','title','excerpt','content','status','type','comment_count',
    ]);
}
