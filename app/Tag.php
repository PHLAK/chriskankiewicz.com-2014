<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
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
     * Get  tag's posts
     *
     * @return belongsToMany Tag posts
     */
    public function posts() {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }

}
