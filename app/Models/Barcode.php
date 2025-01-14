<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
    protected $table = 'article_barcode'; // Utilisez le bon nom de table


    protected $fillable = ['article_id','barcode_path', 'article_name', 'price_fcfa'];

    /**
     * Relation avec le modèle Article via la table pivot.
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_barcode')
                    ->withPivot('barcode_path',)
                    ->withTimestamps();
    }
}
