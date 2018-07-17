<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Session;

/**
 * Admin controller to manage admin activitiess
 *
 * @return \Illuminate\Http\Response
 */

class AuthenticationController extends Controller{

    /**
     * Admin Dashboard Login Function
     */
    public static function getLogin(){
        return view('login');
    }
    public static function postLogin(Request $request){
        $result = Auth::attempt(['email' => trim($request->email),
            'password' => $request->password,
        ], $request->has('remember'));

        if($result){
            $user = Auth::user();
            Session::put('user_id',$user->id);

            return ['status'=>200,'reason'=>'Successfully Authenticated'];
        }
        else{
            return ['status'=>401,'reason'=>'Invalid credentials'];
        }
    }

    /**
     * Admin Dashboard Logout Function
     */
    public static function logout(){
        Auth::logout();
        Session::forget('code');
        Session::forget('access_token');
        return view('login');
    }

} //End Admin Class
