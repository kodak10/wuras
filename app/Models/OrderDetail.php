<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Assurez-vous de cette ligne


class OrderDetail extends Model
{
    use HasFactory;

    // Ajoutez 'user_id' au tableau fillable
    protected $fillable = [
        // 'firstname', 
        // 'lastname', 
        // 'company-name', 
        // 'country', 
        // 'street-address-1', 
        // 'street-address-2', 
        // 'town', 
        // 'zip', 
        // 'state', 
        // 'phone', 
        // 'email', 
        // 'shipping-toggle', 
        // 'order-notes', 
        'article_id', // Ajoutez cette ligne
        'quantity',
        'price',
        'subtotal',
        'name'

    ];

    public function order()
{
    return $this->belongsTo(Order::class);
}

 // Relation avec l'article (Produit)
 public function article()
 {
     return $this->belongsTo(Article::class, 'article_id'); // Assurez-vous que 'article_id' est le bon nom de la clé étrangère
 }


}
