<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function registeradmin(){
    	return view('admin/tampilanregister');
    }
    public function registersubmit(Request $request){

        $validator = Validator::make(request()->all(),[
            'name' => 'required|min:6|max:30|unique:admins,name',
            'phone' => 'required|digits_between:0,13|numeric|unique:admins,phone',
            'username' => 'required|min:6|max:30|unique:admins,username',
            'password' => 'digits_between:8,30|required_with:password_confirmation|
           same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'file' => 'required|max:7000'
        ],
            [
                'name.required'=>'Nama tidak boleh kososng',
                'name.digits_between'=>'Masukkan 6-30 Karakter',
                'name.unique'=>'Nama sudah digunakan',
                'phone.required'=>'Nomor telepon tidak boleh kosong',
                'phone.numeric'=>'Nomor telepon dalam bentuk angka',
                'phone.digits_between'=>'Masukkan 0-13 Karakter',
                'phone.unique'=>'Nomor telepon sudah digunakan',
                'username.required'=>'Username tidak boleh kososng',
                'username.digits_between'=>'Username 6-30 Karakter ',
                'username.unique'=>'Username sudah digunakan',
                'password.required_with'=>'Password tidak boleh kosong',
                'password.same'=>'Password berbeda',
                'password.digits_between'=>'Password Minimal 8 Karakter',
                'file.required'=>'File tidak boleh kosong',
                'file.max'=>'File maksimal 700 KB',
                'password_confirmation.required'=>'Ulangi password tidak boleh kosong',
                'password_confirmation.digits_between'=>'Ulangi password minimal 8 karakter'
            ]);

        if ($validator->fails()) {
            return redirect('admin/register')->withErrors($validator->errors());
        } else {

            $file = $request->file('file');
            $tujuan = 'fotoadmin\\';
            $disimpan = $tujuan . $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());


            $new = new admin;
            $new->name = $request->name;
            $new->phone = $request->phone;
            $new->password = Hash::make($request->password);
            $new->username = $request->username;
            $new->profile_image = $disimpan;
            $new->save();

            return view('admin/tampilanlogin');
        }
    }


    public function loginadmin(){
   		return view('admin/tampilanlogin');
    }
    public function loginsubmit(Request $request){
        $data = $request->only('username','password');
        if (Auth::guard('admin')->attempt($data)){
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with(['fail' => '0']);
        }

    }

    public function dashboard(){
    	return view('admin/dashboard');
    }

    public function logoutadmin(){
    	if(Auth::guard('admin')->check()){
			Auth::guard('admin')->logout();
		}
		return redirect('admin/login');
		}
}