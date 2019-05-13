<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','description','img',
    ];

    protected $hidden = [
        'id','user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categorias(){
        return $this->belongsToMany('App\Models\Categoria');
    }
}
