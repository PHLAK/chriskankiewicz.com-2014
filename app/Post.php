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

    /**
     * Get an article's user
     *
     * @return belongsTo Article user
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Alias for user method
     *
     * @return belongsTo Article author (user)
     */
    public function author() {
        return $this->user();
    }

    /**
     * Get an article's category
     *
     * @return hasOne Article category
     */
    public function category() {
        return $this->hasOne(Category::class);
    }

    /**
     * Get an article's tags
     *
     * @return belongsToMany Article tags
     */
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
