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

use Illuminate\Support\Facades\Storage;

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
        $folders = Storage::disk('local')->directories('dbms');
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
        

        $tables = $database->query("select table_name from information_schema.tables where TABLE_SCHEMA='".$request->dbname."'")->fetchAll();
        $schema = [
            'type' => $request->type,
            'host' => $request->host,
            'database' => $request->dbname,
            'username' => $request->username,
            'password' => $request->password
        ];
        $i=0;
        $path = 'dbms/'.$request->dbname.time();
        Storage::makeDirectory($path);

        foreach($tables as $table){
            $tablename = $table['table_name'];
            $schema['schema'][$i]['table_name'] = $tablename;
            $table_schema = $database->query("describe ".$table['table_name'])->fetchAll();
            $table_data = $database->select($table['table_name'],'*');
            $schema['schema'][$i]['fields'] = $table_schema;
            $schema['schema'][$i]['data'] = $table_data;
            Storage::put($path.'/table_'.$table['table_name'].'.json', json_encode($table_data));
            $i++;
            $tableschema["$tablename"]=$table_schema;
            Storage::put($path.'/schema_'.$table['table_name'].'.json', json_encode($tableschema));
        }
        Storage::put($path.'/schema_'.$request->dbname.'.json', json_encode($tableschema));

        //$schema = json_encode($schema);
        //$schema = response()->json($schema);
        //dd($schema);

        return redirect()->route('sourcedata-dbmsystem');
        //return view('pages.dbmsystemresult',compact('schema'));

    }
    public function dbqualitylevel(Request $request)
    {
        $folder = $request->dir;
        $files = Storage::disk('local')->files('dbms/'.$folder);
        return view('pages.dbqualitylevel',compact('files','folder'));
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
