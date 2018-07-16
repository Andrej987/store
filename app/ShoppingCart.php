<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    protected $fillable = [
        'item_sku', 'item_quantity'
    ];


    protected $table = 'shopping_cart';

    public function items()
    {

        return $this->hasMany(Item::class);

    }

}
