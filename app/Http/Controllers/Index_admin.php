<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index_admin extends Controller
{
    function stock(){
        $cleck = json_decode(json_encode(DB::table('product')->get()), true)??'ไม่เจอ';
        return view('adminpage/views/stock',['posts'=>$cleck]);
    }
    function delete(){
        $headers = apache_request_headers();
    
        DB::table('product')->where('id_product', '=', $headers['Aa'])->delete();
 
    }
}
