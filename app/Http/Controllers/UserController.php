<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     function login(Request $req)
    {
        // $data=$req->input();
        // print_r($data) ;

      $user= User::where(["email"=>$req->email])->first();  // to check from database
      if(!$user || !Hash::check($req->password,$user->password))
        {
            echo "not matched";
        }
        else
        {
            $req->session()->put('user',$user); 
            return redirect('product');
        }
    }
}
