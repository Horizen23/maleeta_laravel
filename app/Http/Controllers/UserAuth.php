<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
class UserAuth extends Controller
{

    function userlogin(Request $request){

           $data =  $request->input();

            $cleck = DB::select("SELECT * FROM user WHERE username = '$data[user]'");
            if($cleck){
                $array = json_decode(json_encode($cleck), true)[0];
                $cleckuser = ($array['username'] == $data['user']  ? ($array['password'] == $data['password'] ? "รหัสถูก" : "หลกหล่าว") : "ไอดีผิด");
                if($cleckuser=='รหัสถูก'){
                    $payload  = [];
                    $payload  += ['id' =>$array['id'],'user' =>$array['username'],'title' =>$array['title'],'iat'=>time(),'exp'=>(time()+900000)];
                   
                    $privatekey = config('app.token_ml');
                    $jwt = JWT::encode($payload , $privatekey);
                    $request->session()->put('accessToken',$jwt);
                    DB::select("UPDATE user SET accessToken='$jwt'  WHERE  username = '$data[user]' ");
                    return redirect('/');
                }
                else{
                    return redirect('/login');
                }
                
            }
            else{
                // echo "รหัสผิด";
                // echo "<pre>";
                // print_r($cleck);
                // echo "</pre>";
                return redirect('/login');
            }


    }
    
    function userlogut(){
        if( session()->has('accessToken'))
        {
            session()->pull('accessToken');
        }
        return redirect('/login');
    }   

    function clecklogin(){
        if(session()->has('accessToken'))
        {
            return redirect('/');
        }
        return view('login');
    }   


    function admin(){
        if(session()->has('accessToken'))
        {   
            $dd = JWT::decode(session('accessToken'), config('app.token_ml'), array('HS256'));
            $Expcheck =  ($dd ? true : false);
            if($Expcheck){
                return view('admin');
            }
            else{
                session()->pull('accessToken');
                return redirect('/login');
            }
         
        }
        else
        {   
            return redirect('/login');
        }
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
                $id = $dd['user'].$dd['id'].$headers['aa'].time().$filesupname[0].'.'.$type; // เวลา + ชื่อไฟล์แยกนามสกกุลออก 
                move_uploaded_file($filesup, $path.'/'. $id) ;
                echo  $headers['aa'];
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
