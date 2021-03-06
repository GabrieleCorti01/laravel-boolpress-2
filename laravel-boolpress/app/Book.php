<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'author', 'description', 'img_url'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
