<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Session;

/**
 * Admin controller to manage admin activitiess
 *
 * @return \Illuminate\Http\Response
 */

class HomeController extends Controller{

    /**
     * Admin Dashboard Landing Function
     */
    public function index(Request $request){
        if(!Auth::check()){
            return redirect('login');
        }
        /*
         * Check if redirected from linkedin
        */
        if($request->code){
            Session::put('code',$request->code);
            $post = [];

            /*
             * Generate access token from given code parameter from callback response
             * */
            $ch = curl_init('https://www.linkedin.com/uas/oauth2/accessToken?grant_type=authorization_code&code='.$request->code.'&redirect_uri=http%3A%2F%2Fsatsai.com&client_id=811umu5gb9w1o7&client_secret=OeIyYv5kVmeOu5QO');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

            $response = curl_exec($ch);
            $token_data = json_decode($response, true);
            $access_token = $token_data['access_token'];
            Session::put('access_token',$access_token);

            // close the connection, release resources used
            curl_close($ch);
            return redirect ('dashboard');
        }

        return view('dashboard');
    }
} //End Admin Class
