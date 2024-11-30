<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image'; // Si votre table est au singulier

    protected $fillable = ['article_id', 'image_path'];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

}
