<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        // 'firstname', 
        'lastname', 
        'company-name', 
        'country', 
        'street-address-1', 
        'street-address-2', 
        'town', 
        'zip', 
        'state', 
        'phone', 
        'email', 
        'shipping-toggle', 
        'order-notes', 
        'user_id', // Ajoutez cette ligne
        'total',
        'status',
        'shipping_address',
        'shipping_method',
        'name'
    ];
    public function orderDetails()
{
    return $this->hasMany(OrderDetail::class);
}

}
