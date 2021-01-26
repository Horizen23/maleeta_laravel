<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
class PageadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([1,2,3,4,5,6]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = "anuchdit";
        $pass = "123";
        $payload = array(
            "username"=> "anuchdit",
            "password"=>"12d3",
            "iat" => time(),
            "exp" => time ()+222
        
        );
        $key = "55";

        $idb = $request->get('username');
        $passb = $request->get('password');
        $tt = $request->get('token');
        $privatekey = config('app.token_ml');
        
        $jwt = JWT::encode($payload, $privatekey);

        $decoded = JWT::decode($tt, $privatekey, array('HS256'));

        $p = $idb && $passb ? ($idb==$id && $passb==$pass? true:false) :  false ;


        if($p){
            return response()->json(array(
                        "token" => $jwt,
                        "decode" =>  $decoded->{'exp'}-$decoded->{'iat'}
            ));
        }
        else{
            return response()->json(400,400);
        }
    


                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  response()->json(['id'=>$id]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
