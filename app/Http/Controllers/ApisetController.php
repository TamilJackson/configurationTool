<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Product;
use App\Models\Apiset;

class ApisetController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Apiset::orderBy('id','DESC')->paginate(10);
        return view('pages.apiset-list',compact('data'))
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
        $products = Product::all();
        return view('pages.apiset-add',compact('systems','products'));
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
            'system_id' => 'required',
            'product_id' => 'required'
        ]);
    
        $input = $request->all();
    
        Apiset::create($input);
    
        return redirect()->route('apiset-list')
                        ->with('success','Api created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apiset = Apiset::find($id);
        return view('pages.apiset-view',compact('apiset'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apiset = Apiset::find($id);
        $systems = System::all();    
        $products = Product::all();    
        return view('pages.apiset-edit',compact('apiset','products','systems'));
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
            'system_id' => 'required',
            'product_id' => 'required'
        ]);
    
        $input = $request->all();
    
        $apiset = Apiset::find($id);
        $apiset->update($input);
    
        return redirect()->route('apiset-list')
                        ->with('success','Api updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Apiset::find($id)->delete();
        return redirect()->route('apiset-list')
                        ->with('success','Api deleted successfully');
    }
}
