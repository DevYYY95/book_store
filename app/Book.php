<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable  = ['title','desc','year','publisher','licence','copyright','file','author_id','category_id','user_id'];

    protected $table = 'book';

    protected $dates = ['deleted_at'];
}
