<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductsRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->except('img');

            if ($request->hasFile('img')) {
                $img_path = $request->file('img')->store('products/img', 'public');
                $data['img'] = $img_path;
                $data['img_url'] = url('/storage/'.$img_path);
            }

            $store = new Product();
            $store = $store->fill($data);
            $store->save();

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Successfully added product !');

        } catch (\Exception $error) {
            DB::rollBack();
            return $error->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('pages.products.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $product = Product::find($id);

            $data = $request->except('img');

            if ($request->hasFile('img')) {
                if ($product->img && file_exists(storage_path('app/public/'.$product->img))) {
                    Storage::delete('public/'.$product->img);
                }

                $img_path = $request->file('img')->store('products/img', 'public');
                $data['img'] = $img_path;
                $data['img_url'] = url('/storage/'.$img_path);
            }

            if (!$data['is_discount']) {
                $data['after_discount'] = null;
            }

            $product = $product->fill($data);
            $product->save();

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Successfully updated product !');

        } catch (\Exception $error) {
            DB::rollBack();
            return $error->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Product::find($id);

        if ($destroy->img && file_exists(storage_path('app/public/'.$destroy->img))) {
            Storage::delete('public/'.$destroy->img);
        }
        $destroy->delete();

        return redirect()->route('product.index')->with('success', 'Successfully deleted product !');
    }
}
