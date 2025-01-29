<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'quantity',
        'price',
        'discount',
        'total',
        'store_id',
        'user_id',
    ];
    
    // Définir la relation avec le produit
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
