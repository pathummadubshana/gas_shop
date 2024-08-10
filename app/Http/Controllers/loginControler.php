<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControler extends Controller
{
    //
    public function login(Request $request){

       if($request->username=="admin" && $request->password=="admin"){
        return redirect('/dashbord');
       }

    }
}
