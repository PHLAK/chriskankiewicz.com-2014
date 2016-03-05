<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'slug', 'date', 'category_id' // Tags?
    ];

    public function users() {
        $this->hasOne('App\User');
    }

    public function categories() {
        $this->hasOne('App\Category');
    }

    public function tags() {
        $this->hasMany('App\Tag');
    }

}
