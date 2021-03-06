<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Anggota;
use Harisa;
use Session;
use DB;


class JsonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {   
        echo "No Direct Access Allowed";die();
    }

    public function list_anggota(Request $request){
       $data =   DB::table('anggota')
                    ->select('id','nama');

        if(!empty($request->Input('q'))){
            $data->whereRaw("UPPER(nama) like '%".strtoupper($request->Input('q'))."%'");
        }
        
        echo json_encode($data->get()); 
    }

    function select2Anggota(Request $request){
        $q = $request->input('q');
        
        $query = DB::table('anggota')->select('id','nama');
        if(!empty($q)){
            $query->whereRaw("UPPER(nama) LIKE '%".strtoupper($q)."%'");
        }

        echo json_encode($query->get());
    }

    
}
