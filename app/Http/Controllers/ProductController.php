<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Product;

class ProductController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Product::orderBy('id','DESC')->paginate(10);
        return view('pages.products-list',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 1);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systems = System::all();
        return view('pages.products-add',compact('systems'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'system_id' => 'required'
        ]);
    
        $input = $request->all();
    
        Product::create($input);
    
        return redirect()->route('products-list')
                        ->with('success','Product created successfully');
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
        return view('pages.products-view',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $systems = System::all();    
        return view('pages.products-edit',compact('product','systems'));
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
        $this->validate($request, [
            'name' => 'required',
            'system_id' => 'required'
        ]);
    
        $input = $request->all();
    
        $product = Product::find($id);
        $product->update($input);
    
        return redirect()->route('products-list')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products-list')
                        ->with('success','Product deleted successfully');
    }
}
