<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug', 'description', 'price', 'quantite', 'status', 'discount_type', 'discount_value', 'couverture'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
    
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'id', 'article_id');
    }



    

    
    


    
}
