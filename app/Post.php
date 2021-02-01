<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mass assignment
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
    ];
    // Relations
    public function users()
    {
        return $this->belognsTo('App/User');
    }
}