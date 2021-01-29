<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Add_product extends Controller
{

    function addproduct(){

        $payload = file_get_contents('php://input');
        $arrylls = explode('&', urldecode($payload));
        $urldecode_array = array();
        foreach ($arrylls as $arryll) {
            $ar = explode('=', urldecode($arryll));
            $urldecode_array[$ar[0]] = $ar[1];
        }
        print_r($urldecode_array);

        
        DB::table('product')->insert([
            'name_product' => $urldecode_array['productid'],
            'status' => $urldecode_array['statusid'],
            'price' => $urldecode_array['countid'],
            'amount' => $urldecode_array['pliceid'],
        ]);
    
    }   



    function upload(){
        $headers = apache_request_headers();
            if ( 0 < $_FILES['file']['error'] ) {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            }
            else {
                $dd = JWT::decode(session('accessToken'), config('app.token_ml'), array('HS256'));
                $Expcheck =  ($dd ? true : false);
                if($Expcheck){
                    $dd = json_decode(json_encode($dd), true);
                    if( $dd['title']=='admin'){
                        $path = public_path('image/upload');
                        $filesup = $_FILES['file']['tmp_name']; 
                        $filesupname  = explode(".",$_FILES['file']['name']);
                        $type  = end($filesupname);   // เลือกอาเรตัวสุดดทายคือนามสกุลไฟล์
                        $id = $dd['user'].$dd['id'].$headers['Aa'].time().$filesupname[0].'.'.$type; // เวลา + ชื่อไฟล์แยกนามสกกุลออก 
                        move_uploaded_file($filesup, $path.'/'. $id) ;
                        echo  $headers['Aa'];
                        DB::select("INSERT INTO uploadfile (fileupload)  VALUES('$id') ");
                    }
                    else{
                        session()->pull('accessToken');
                        return redirect('/login');
                    }
                }
                else{
                    session()->pull('accessToken');
                    return redirect('/login');
                }
                // file_put_contents($path.'/' .'log.txt',explode(".",$_FILES['file']['name'])[1]);
            }
    }













}
