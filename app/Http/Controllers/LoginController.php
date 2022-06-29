<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    public function showlogin()
    {

        return view('auth.login');
    }



    public function logincheck(Request $request)
    {
    //   dd($request);

      $email =strtolower($request->email);
      if($user=User::where('email',$email)->first()){
          if(Hash::check($request->password,$user->password))
          {
             $data = session([
                        'employee_name' => $user->name,
                        'employee_id' => $user->id,
                        'email' => $user->email,
                        'mobile' => $user->mobile,
                        'address' => $user->address,
                        'role' => $user->role,
                        'role_name' => $user->role_name,
                        'status' => $user->status,
                        'password' => $user->name,



             ]);

             if($user->role == 1)
             {
                return redirect('/admin-Dashboard');

             }elseif($user->role ==0 && $user->status ==1){

             }

             else{
                return redirect('/')->with('error');

             }

          }else{
            return back()->with('error','please give vaild info');

          }

      }else{
        return back()->with('error','please give vaild info');


      }



    }

    public function logout()
    {

       $forget = session()->flush();
       return redirect('/');

    }
}
