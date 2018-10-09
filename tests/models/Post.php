<?php

namespace Jsdecena\Comments\Tests;

use Illuminate\Database\Eloquent\Model;
use Jsdecena\Comments\Models\Comment;

class Post extends Model
{
    protected $fillable = [
        'title'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}