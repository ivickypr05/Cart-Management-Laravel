<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $data['products'] = Product::with('category')->get();

        return view('home', $data);
    }
    public function product()
    {
        $data['products'] = Product::with('category')->get();

        return view('product', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $data['categories'] = Category::all();
            return view('admin/add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|min:2|max:50',
        //     'price' => 'required|integer',
        //     'description' => 'required|string|min:5|max:255',
        //     'image' => 'required|string',
        //     'category_id' => 'required|integer|exists:categories,id',
        // ]);
        // Product::create($validatedData);
        // return redirect('/product');
        Product::create([
            'name'=>$request->input('product_name'),
            'price'=>$request->input('product_price'),
            'description'=>$request->input('product_description'),
            'image'=>$request->input('product_image'),
            'category_id'=>$request->input('category_id'),
        ]);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::all();
        $data['product'] = Product::find($id);
        // dd($data);
        return view('admin/edit', $data);
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
        Product::where('id', $id)->update([
            'name'=>$request->input('product_name'),
            'price'=>$request->input('product_price'),
            'description'=>$request->input('product_description'),
            'image'=>$request->input('product_image'),
            'category_id'=>$request->input('category_id')
        ]);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product');
    }
}
