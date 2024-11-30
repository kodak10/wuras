<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = 'article_variation'; // Si votre table est au singulier

    // Indiquer que les champs suivants sont autorisés à être assignés en masse
    protected $fillable = [
        'article_id',
        'type',
        'value',
    ];

    // Définir la relation avec le modèle Article
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
