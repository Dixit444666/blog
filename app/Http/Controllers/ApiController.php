<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class ApiController extends Controller
{
    // //
    // public function data()
    // {
    //     return view('form');
    // }
    public function formdata(Request $request)
    {
        $data = new FormData;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        // $return response($data)->json("Succss");
        return ["result"=>"done"];
    }

}
