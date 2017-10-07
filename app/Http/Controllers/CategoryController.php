<?php

namespace App\Http\Controllers;


use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function index()
    {
        $category = Category::all();
        return view("admin/create-product")->with("category", $category);
    }*/

    public function index() {
        $category = Category::all();
        $cat = $category->first();
        return view("admin.create-product", compact("category", "cat")) ;
    }

    public function show(Request $request)
    {
        $cat_id = $request->cat_id;
        $category = Category::find($cat_id);
        return $category->subcategories;
    }
}
