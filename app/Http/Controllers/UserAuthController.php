<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UserAuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function showRegister()
    {
        return view('register');
    }

    function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'mobile'=>'required|min:11|max:12',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:24',
            'BkashNo'=>'required|min:11|max:12',
            'TrxId'=>'required'
            
            

        ]);

        $user=new User;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->BkashNo = $request->BkashNo;
        $user->TrxId = $request->TrxId;
        $user->password = Hash::make($request->password);
        $user->status = false;
        $query= $user->save();

        if($query)
        {
            return back()->with('success','You have been successfully registered');
        }
        else
        {
            return back()->with('fail','Something went Wrong!');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:24',
        ]);
        
        $user= User::where('email','=', $request->email)->first();
        if($user)
        {
           if($user && Hash::check($request->password, $user->password) && $user->status == 1)
           {
               
               $request->session()->put('LoggedUser',$user->id);
               return redirect('profile');
               
               
           }
           else{
               return back()->with('fail','Invalid Password');
           }
        }
        else
        {
            return back()->with('fail','No account found');
        }


        
    }

    function UserProfile()
    {
        if(session()->has('LoggedUser'))
        {
            $user= User::where('id','=',session('LoggedUser'))->first();
            $data=[
                'LoggedUserInfo'=>$user
            ];
        }
        return view('user.userprofile',$data);
    }

    function profile()
    {
        
        return view('user.profile');
    }
    function Logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    function status(Request $request, $id)
    {
        $data = User::find($id);
        if($data->status == 0)
        {
            $data->status =1;
        }
        else
        {
            $data->status =0;
        }
        $data->save();
        return redirect('userprofile')->with('message', $data->name.'Status has been changed!');

    }
}
