<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

// Using Medoo namespace.
use Medoo\Medoo;

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
    public function connectdbmsystem(Request $request)
    {

        // Connect the database.
        // $database = new Medoo([
        //     'type' => 'mysql',
        //     'host' => '127.0.0.1',
        //     'database' => 'configurationtool',
        //     'username' => 'root',
        //     'password' => ''
        // ]);

        //Connect the database.
        $database = new Medoo([
            'type' => $request->type,
            'host' => $request->host,
            'database' => $request->dbname,
            'username' => $request->username,
            'password' => $request->password
        ]);
        

        $tables = $database->query("select table_name from information_schema.tables where TABLE_SCHEMA='".$request->dbname."'")->fetchAll();
        $schema = [
            'type' => $request->type,
            'host' => $request->host,
            'database' => $request->dbname,
            'username' => $request->username,
            'password' => $request->password
        ];
        $i=0;

        foreach($tables as $table){
            $schema['schema'][$i]['table_name'] = $table['table_name'];
            $schema['schema'][$i]['fields'] = $database->query("describe ".$table['table_name'])->fetchAll();
            $schema['schema'][$i]['data'] = $database->query("select * from ".$table['table_name'])->fetchAll();
            $i++;
        }
        //$schema = json_encode($schema);
        //$schema = response()->json($schema);
        //dd($schema);

        return view('pages.dbmsystemresult',compact('schema'));

    }
    public function qualitylevel(Request $request)
    {
        return view('pages.qualitylevel');
    }
    public function rules(Request $request)
    {
        return view('pages.rules');
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
