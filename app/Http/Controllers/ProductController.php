<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index',compact("products"));
    }
    public function show($productId)
    {
        $product = DB::table('products')->find($productId);
        return view('products.show',['product'=>$product]);
    }
    public function create()
    {
        return view('products.create');

    }
     public function store(Request $request)
    {
     $data=$request->validate([
        'name' => 'required|string',
        'description' => 'required|nullable',
        'price' => 'required|numeric',
        'image' => 'required|image|max:2048',
      ]);
      if($request->hasFile('image')){
        $data['image']=$request->file("image")->store('images','public');
      }
      Product::create($data);
      return redirect()->route('Product.index')->with('success','Product Added');
    }
    public function edit($productId)
    {
        $product = Product::findOrFail($productId);
        return view('products.edit',compact('product'));

    }
    public function update(Request $request,$productId)
    {
        $product = Product::findOrFail($productId);
        $data=$request->validate([
            'name' => 'nullable|string',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('image'))
        {
           $data['image']=$request->file("image")->store('images','public');
        }
        $product->update($data);
        return redirect()->route('Product.index')->with('success','Product Updated');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('Product.index')->with('success','Product Deleted');
    }




}
