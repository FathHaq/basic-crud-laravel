<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 0;
        $products = Product::all();
        return view('index', compact(['products']));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact(['product']));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');
    }
}
