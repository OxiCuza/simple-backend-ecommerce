<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function categories()
    {
        try {
            $categories = Category::select(['id', 'img_url', 'name'])->get();

            return response()->json([
                'success' => true,
                'message' => 'list data categories',
                'data' => $categories
            ], 200);

        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage()
            ], 500);

        }
    }

    public function products()
    {
        try {
            $products = Product::all();

            return response()->json([
                'success' => true,
                'message' => 'list data product',
                'data' => $products
            ], 200);

        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage()
            ], 500);

        }
    }

    public function detailProduct($id)
    {
        try {
            $product = Product::find($id);

            return response()->json([
                'success' => true,
                'message' => 'detail product',
                'data' => $product
            ],200);

        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage()
            ],500);

        }
    }

    public function productsByCategory($id)
    {
        try {
            $products = Product::where('category_id', $id)->select([
                'id', 'img_url', 'title', 'price', 'is_discount', 'after_discount'
            ])->get();

            return response()->json([
                'success' => true,
                'message' => 'list product by category',
                'data' => $products
            ],200);

        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage()
            ],500);
        }

    }
}
