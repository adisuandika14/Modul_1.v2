<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validasiController extends Controller
{
    public function input()
    {
        return view('admin/register');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'username' => 'required|min:5|max:20',
           'email' => 'required',
           'password' => 'required|min:8'
           return view ('admin/register');
          
        ]);
 
        return view('admin/register',['data' => $request]);
    }
}