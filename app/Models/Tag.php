<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag_name', 'tag_thumbnail', 'tag_name'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_tag');
    }
}
