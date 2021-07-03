<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class SourcedataController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lms(Request $request)
    {
        return view('pages.lms');
    }
    public function sis(Request $request)
    {
        return view('pages.sis');
    }
    public function dbmsystem(Request $request)
    {
        return view('pages.dbmsystem');
    }
    public function crm(Request $request)
    {
        return view('pages.crm');
    }
    public function filesystem(Request $request)
    {
        return view('pages.filesystem');
    }
}
