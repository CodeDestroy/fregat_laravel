<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class WholesaleCatalogController extends Controller
{

    public function index(Request $request)
    {
        

        $query = Product::query()
            ->where('is_active', true)

            ->whereHas('offers', function ($query) {
                $query->where('quantity', '>', 0);
            })

            ->with(['offers' => function ($query) {
                $query->where('quantity', '>', 0);
            }]);

        // фильтр по категории Переделать!
        if ($request->category) {

            $categoryIds = Category::where('id', $request->category)
                ->orWhere('parent_id', $request->category)
                ->pluck('id')
                ->toArray();

            $query->whereIn('category_id', $categoryIds);

        }
        if ($request->subCategory) {

            $query->where('category_id', $request->subCategory);

        }

        // поиск
        if ($request->search) {

            $search = trim($request->search);

            $query->where(function ($q) use ($search) {

                $q->where('name', 'ILIKE', "%$search%")

                    ->orWhere('sku', 'ILIKE', "%$search%")

                    ->orWhere('id', 'ILIKE', "%$search%");

            });

        }

        // фильтры таблицы
        if ($request->sku) {

            $query->where('sku', 'ILIKE', "%$request->sku%");

        }

        if ($request->name) {

            $query->where('name', 'ILIKE', "%$request->name%");

        }

        $products = $query
            ->paginate(50)
            ->withQueryString();

        if ($request->ajax()) {
            return view('pages.catalog.partials.product_rows', compact('products'))->render();
        }


        // категории для меню
        $categories = Category::whereNull('parent_id')

            ->where('show_in_catalog', true)

            ->with('children')

            ->orderBy('name')

            ->get();

        $carts = [];

        


        return view('pages.catalog.catalogOpt', compact(

            'products',

            'categories',

            'carts'

        ));

    }

}