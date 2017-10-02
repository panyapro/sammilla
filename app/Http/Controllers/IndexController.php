<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller {

    protected $header;

    public function __construct() {
        $this->header = "TEST HEADER";
    }

    public function index() {
        $products = Product::select(['id', 'name'])->get();
        return view('client.page')->with(['products' => $products,
                    'header' => $this->header]);
    }

    public function show($productId) {
        $product = Product::find($productId);
        return view('product_detail')->with(["product" => $product, 'header' => $this->header]);
    }

    public function show_by_category($categoryId){
        return view('products_by_category');
    }

    public function show_by_sub_category($subCategoryId){
        return view('products_by_sub_category');
    }

    public function about_us(){
        return view('about-us');
    }

    public function cart(){
        return view('cart');
    }

    public function search($query){
        return view('search');
    }


    
    public function add(){
        return view('add-content')->with('header', $this->header);
    }
    
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|max:45',
            'categoryId' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        $data= $request->all();
        $newProduct = new Product;
        $newProduct->fill($data);
        $newProduct->category_id = $request->categoryId;
        $newProduct->save();

        return redirect("/");

    }
}
