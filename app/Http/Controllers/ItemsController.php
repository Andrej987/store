<?php

namespace App\Http\Controllers;

use App\Item;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{

    // store function in items table and returns back, if we want to add more then one item

    public function store()
    {
        Item::create([

            'name' => request('name'),
            'quantity' => request('quantity'),
            'price' => request('price'),

            ]);

        return back();

    }

    // show all items from the database

    public function index()
    {

        $items = Item::all();

        return view('items', compact('items'));

    }

    // add items sku and inputed quantity to the shopping_cart table

    public function addToShoppingList(){

    ShoppingCart::create([

        'item_sku' => request('item_sku'),
        'item_quantity' => request('item_quantity'),

        ]);

        return back();

    }

    // shows all shopping carts, and join items table to the shopping carts table so we can access items data

    public function showShoppingCart(){

        $items = Item::all();

     $ordered_items = DB::table('shopping_cart')->join('items', 'items.sku', '=' , 'shopping_cart.item_sku')->get();


        return view('items', compact('ordered_items', 'items'));

    }

    // remove item from the shopping cart table and from the list

    public function remove($sku)
    {

        $shoppingCart = ShoppingCart::where('item_sku', $sku)->first();
        $shoppingCart->delete();

        return back();
    }

    // prints all data from shipping carts table, and sum prices from added items

    public function checkout(){

        $ordered_items = DB::table('shopping_cart')->join('items', 'items.sku', '=' , 'shopping_cart.item_sku')->get();
        $total_price = DB::table('shopping_cart')->join('items', 'items.sku', '=' , 'shopping_cart.item_sku')->sum('price');


    return view('checkout', compact('ordered_items', 'total_price'));

    }

}
