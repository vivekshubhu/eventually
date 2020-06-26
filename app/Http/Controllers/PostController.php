<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class PostController extends Controller
{
    public function login () {
        return view('loginPage');
    }

    public function signup(){
        return view('signupPage');
    }

    public function storeUser(Request $request){
    	// return 'it is woring';
    	// $messages = [
    	// 	'required' => 'The : atrribute field is required'
    	// ];

                
            $validatedData = $request->validate([
               'first_name' => 'required|string',
                'last_name' => 'required|string',
                'password' => 'required|string',
                'confirmPassword' => 'required|string',
                'email' => 'required|email',
            ]);



        $data = $request->except('_token', 'confirmPassword');


        $user = user::create($data);
        // dd($user);

    	return response()->json(['message'=>'Your form data has been submitted'],200);

    }


    public function loginUser(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'password' => 'required|string',
            'email' => 'required|email',
        ]);

        $email = $request->email;
        $data = $request->except('_token');
        $users = user::get()->toArray();
        // dd($email);

      $filtered_array = array_filter($users, function ($user) use ($email){ 
                return ($email == $user['email']);

        } );

      // dd($filtered_array);
      
      if($filtered_array[0] && $filtered_array[0]['password'] == $request->password){

        return response()->json(['message'=>'logged in'],200);

      }else{
         return response()->json(['message'=>'your creadentials doesnot match, please try again'],403);
      }

    }
}

