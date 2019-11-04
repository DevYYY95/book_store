<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','desc','email','year','mobile','phone','address','user_id'];

    protected $table = 'author';

    protected $dates = ['deleted_at'];
}
