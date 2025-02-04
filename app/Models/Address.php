<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'commune', 'lieu_livraison', 'phone01', 'phone02', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
