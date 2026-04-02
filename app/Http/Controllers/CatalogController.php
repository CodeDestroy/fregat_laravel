<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function categories()
    {
        return Category::whereNull('parent_id')
            ->where('show_in_catalog', true)
            ->with('children')
            ->orderBy('name')
            ->get();
    }

    /**
     * товары категории
     */
    public function category($id)
    {
        $category = Category::with([
            'children',
            'products.offers.priceType'
        ])->findOrFail($id);

        return response()->json([
            'category' => $category,
            'products' => $category->products
                ->where('is_active', true)
                ->values()
        ]);
    }

    /**
     * карточка товара
     */
    public function product($id)
    {
        return Product::with([
            'category',
            'offers.priceType'
        ])->findOrFail($id);
    }

    public function search(Request $request)
    {
        $q = trim($request->get('q'));

        if (!$q) {
            return [];
        }

        $products = Product::query()
            ->with('offers')
            ->where('is_active', true)
            ->where(function ($query) use ($q) {

                $query->where('name', 'ILIKE', "%{$q}%")
                    ->orWhere('full_name', 'ILIKE', "%{$q}%")
                    ->orWhere('sku', 'ILIKE', "%{$q}%");

            })
            ->limit(50)
            ->get();

        return $products;
    }
}
