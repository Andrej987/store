<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = [
        'name', 'quantity', 'price'
    ];


    protected $table = 'items';

    public function shoppingCart()
    {

        return $this->belongsTo(ShoppingCart::class);

    }

}
