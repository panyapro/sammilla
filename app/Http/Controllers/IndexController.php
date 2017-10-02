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

        return view('page')->with(['products' => $products,
                    'header' => $this->header]);
    }

    public function show($productId) {
        $product = Product::find($productId);
        return view('product_detail')->with(["product" => $product, 'header' => $this->header]);
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
