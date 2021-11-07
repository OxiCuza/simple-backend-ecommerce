<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all()->count();
        $products = Product::all()->count();

        return view('pages.dashboard.index', compact('categories', 'products'));
    }
}
