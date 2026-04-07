<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add(Request $request)
    {

        $product = Product::with('offers')->findOrFail($request->product_id);

        $offer = $product->offers->first();

        if($request->quantity > $offer->quantity){

            return response()->json([
                'error' => 'Недостаточно товара'
            ], 422);

        }

        $item = CartItem::firstOrNew([

            'cart_id' => $request->cart_id,
            'product_id' => $product->id

        ]);

        $item->quantity += $request->quantity;

        if($item->quantity > $offer->quantity){

            $item->quantity = $offer->quantity;

        }

        $item->price = $offer->price;

        $item->save();

        return response()->json(['success'=>true]);

    }

}