<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Product;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class SystemController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = System::orderBy('id','DESC')->paginate(10);
        return view('pages.systems-list',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 1);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.systems-add');
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
            'name' => 'required'
        ]);
    
        $input = $request->all();
    
        System::create($input);
    
        return redirect()->route('systems-list')
                        ->with('success','System created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $system = System::find($id);
        return view('pages.systems-view',compact('system'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $system = System::find($id);
    
        return view('pages.systems-edit',compact('system'));
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
            'name' => 'required'
        ]);
    
        $input = $request->all();
    
        $system = System::find($id);
        $system->update($input);
    
        return redirect()->route('systems-list')
                        ->with('success','System updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        System::find($id)->delete();
        return redirect()->route('systems-list')
                        ->with('success','System deleted successfully');
    }

    public function products(Request $request, $id) {
    if ($request->ajax()) {
        return response()->json([
            'products' => Product::where('system_id', $id)->get()
        ]);
    }
}
}
