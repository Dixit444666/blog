<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function login()
    {
        if(!session()->has('collection')){

            return view('login');
        }
        return view('profile');

    }
    public function profile(Request $request)
    {
        // dd("sdgvsdgsd");
        $email=$request->get('email');
        $password=$request->get('password');
        $data = User::where('email',$email)->where('password',$password)->count();
        // dd($data);
        if($data == 1)
        {
            // dd("success");
            $alldata = User::where('email',$email)->where('password',$password)->get();
            $request->session()->put('collection',$alldata);
            return redirect('profile')->with('success','lgin successfully');
        }else{            
            return redirect('login')->with('msg','email or password is wrong');
        }

    }
    public function logout()
    {
        session()->forget('collection');
        return redirect('login');
    }
    public function lan()
    {
        return view('dashboard');
    }
}