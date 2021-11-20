<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->only('name');

            if ($request->hasFile('img')) {
                $img_path = $request->file('img')->store('categories/img', 'public');
                $data['img'] = $img_path;
                $data['img_url'] = url('/storage/'.$img_path);
            }

            $store = new Category;
            $store = $store->fill($data);
            $store->save();

            DB::commit();

            return redirect()->route('category.index')->with('success', 'Successfully added category !');

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
        $data = Category::find($id);

        return view('pages.categories.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);

        return view('pages.categories.edit', compact('data'));
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

            $category = Category::find($id);

            $data = $request->only('name');

            if ($request->hasFile('img')) {
                if ($category->img && file_exists(storage_path('app/public/'.$category->img))) {
                    Storage::delete('public/'.$category->img);
                }

                $img_path = $request->file('img')->store('category/img', 'public');
                $data['img'] = $img_path;
                $data['img_url'] = url('/storage/'.$img_path);
            }

            $category = $category->fill($data);
            $category->save();

            DB::commit();

            return redirect()->route('category.index')->with('success', 'Successfully updated category !');

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
        $destroy = Category::find($id);

        if ($destroy->img && file_exists(storage_path('app/public/'.$destroy->img))) {
            Storage::delete('public/'.$destroy->img);
        }
        $destroy->delete();

        return redirect()->route('category.index')->with('success', 'Successfully deleted category !');
    }
}
