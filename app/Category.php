<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get a category's posts
     *
     * @return belongsTo Category posts
     */
    public function posts() {
        return $this->belongsToMany(Post::class);
    }

}
