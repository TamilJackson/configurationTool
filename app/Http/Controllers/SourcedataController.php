<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Models\System;
use App\Models\Product;
use App\Models\Apiset;

// Using Medoo namespace.
use Medoo\Medoo;

use Illuminate\Support\Facades\Storage;

class SourcedataController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function systemsourcedata($id)
    {
        $system = System::find($id);
        $products = Product::where('system_id',$id)->get();
        $apisets = Apiset::all();
        return view('pages.sourcedata',compact('system','products','apisets'));
    }
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
        $client_id = config('app.client_id');
        $folders = Storage::disk('local')->directories($client_id.'/dbms');
        return view('pages.dbmsystem',compact('folders'));
    }
    public function testdbmsystem(Request $request)
    {
        //Connect the database.
        $database = new Medoo([
            'type' => $request->type,
            'host' => $request->host,
            'database' => $request->dbname,
            'username' => $request->username,
            'password' => $request->password
        ]);
        if($database)
            return view('pages.dbmsystem')->with('successMsg','Database connection successful.');
            
    }
    public function connectdbmsystem(Request $request)
    {
        //Connect the database.
        $database = new Medoo([
            'type' => $request->type,
            'host' => $request->host,
            'database' => $request->dbname,
            'username' => $request->username,
            'password' => $request->password
        ]);
        if($request->action=='test'){
            if($database){                
                $folders = Storage::disk('local')->directories('dbms');
                return view('pages.dbmsystem',compact('folders'))->with('successMsg','Database connection successful.');
            }
        }
        $client_id = config('app.client_id');

        if($request->system_id){
            $system_slug = System::select('slug')->where('id',$request->system_id)->first();
            $system_slug = $system_slug->slug; 
        }
        else{
           $system_slug = $request->system_slug; 
        }

        $path = $client_id.'/'.$system_slug.'/';
        if($request->prouct_id){
            $prouct_id = $request->prouct_id;
            $prouct_slug = Product::select('slug')->where('id',$request->prouct_id)->first();
            $path = $path.$prouct_slug->slug.'/';
        }
        $path = $path.time().'/';
        $schema_path = $path.'/metadata/';
        $data_path = $path.'/dataset/';
        Storage::makeDirectory($path);        

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
            $tablename = $table['table_name'];
            $schema['schema'][$i]['table_name'] = $tablename;
            $table_schema = $database->query("describe ".$table['table_name'])->fetchAll();
            $string=[];
            $object=[];
            $datetime=[];
            $numeric=[];
            foreach($table_schema as $column){
                $column_data = $database->select($table['table_name'],$column['Field']);
                if(str_contains($column['Type'], 'text') || str_contains($column['Type'], 'varchar') || str_contains($column['Type'], 'blob')){
                    $datatypes['string'] = '100%';
                    $datatypes['object'] = '0';
                    $datatypes['datetime'] = '0';
                    $datatypes['numeric'] = '0';
                    $string = $column_data;
                }
                else if(str_contains($column['Type'], 'object')){
                    $datatypes['string'] = '0';
                    $datatypes['object'] = '100%';
                    $datatypes['datetime'] = '0';
                    $datatypes['numeric'] = '0';
                    $object = $column_data;
                }
                else if(str_contains($column['Type'], 'datetime') || str_contains($column['Type'], 'timestamp') || str_contains($column['Type'], 'date') || str_contains($column['Type'], 'datetime') || str_contains($column['Type'], 'time')){
                    $datatypes['string'] = '0';
                    $datatypes['object'] = '0';
                    $datatypes['datetime'] = '100%';
                    $datatypes['numeric'] = '0';
                    $datetime = $column_data;
                }
                else if(str_contains($column['Type'], 'int') || str_contains($column['Type'], 'double') || str_contains($column['Type'], 'float')){                    
                    $datatypes['string'] = '0';
                    $datatypes['object'] = '0';
                    $datatypes['datetime'] = '0';
                    $datatypes['numeric'] = '100%';
                    $numeric = $column_data;
                }
                $data['data_types']=$datatypes;
                $data['string']=$string;
                $data['object']=$object;
                $data['datetime']=$datetime;
                $data['numeric']=$numeric;
                $data['all_data']=$column_data;
                Storage::makeDirectory($data_path.'/'.$table['table_name'].'/columnset/'); 
                Storage::put($data_path.'/'.$table['table_name'].'/columnset/'.$column['Field'].'.json', json_encode($data));
            }
            $table_data = $database->select($table['table_name'],'*');
            $schema['schema'][$i]['fields'] = $table_schema;
            $schema['schema'][$i]['data'] = $table_data;
            Storage::makeDirectory($schema_path); 
            Storage::put($schema_path.'schema_'.$table['table_name'].'.json', json_encode($table_schema));
            Storage::put($data_path.'/'.$table['table_name'].'/rowset.json', json_encode($table_data));
            //$tableschema["$tablename"]=$table_schema;
            $i++;
        }

        //Storage::put($path.'/schema_'.$request->dbname.'.json', json_encode($tableschema));

        //$schema = json_encode($schema);
        //$schema = response()->json($schema);
        //dd($schema);

        return redirect()->route('sourcedata-dbmsystem');
        //return view('pages.dbmsystemresult',compact('schema'));

    }
    public function dbqualitylevel(Request $request)
    {
        $client_id = config('app.client_id');
        $folder = $request->dir;
        $dataset = Storage::disk('local')->directories($client_id.'/dbms/'.$folder.'/dataset');
        $metaset = Storage::disk('local')->files($client_id.'/dbms/'.$folder.'/metadata');
        return view('pages.dbqualitylevel',compact('folder','client_id','dataset','metaset'));
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
