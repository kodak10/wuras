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
    ];
    
    // Définir la relation avec le produit
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
