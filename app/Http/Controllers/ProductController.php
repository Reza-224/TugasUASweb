<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index',compact(['products']));
    }

    public function home() {
        
        return view('frontend.home');
    }

    public function explore() {
        $products = Product::all();
        return view('frontend.explore',compact(['products']));
    }

    public function becomeseller() {
        
        return view('frontend.becomeseller');
    }

    public function becomeuser() {
        
        return view('frontend.becomeuser');
    }

    public function login() {
        
        return view('frontend.login');
    }

    public function category() {
        
        return view('frontend.category');
    }

    public function produk() {
        
        return view('frontend.produk');
    }

    public function tambah() {
        
        return view('products.tambah');
    }

    public function store(Request $request) {
        
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('products.edit',compact(['product']));
    }

    public function update(Request $request,$id) {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
        
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}

