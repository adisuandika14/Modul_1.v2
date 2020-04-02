<?php

namespace App\Http\Controllers;

use App\Mail\verifyuser;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Mail;
use Illuminate\Support\Facades\DB;
use Session;

class userController extends Controller
{

    public function dashboard(){
        return view('user/dashboard');
    }

    public function userlogin(){
        return view('user/loginuser');
    }

    public function userregister(){
        return view('user/registeruser');
    }

    public function registersubmit(Request $request){

        $validator = Validator::make(request()->all(),[
            'name' => 'required|min:6|max:30|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'status' => 'required|min:3|max:30',
            'password' => 'min:8|required_with:password_confirmation|
           same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'file' => 'required|max:7000'
        ],
            [
                'name.required'=>'Nama tidak boleh kososng',
                'name.digits_between'=>'Nama 6-30 Karakter',
                'name.unique'=>'Nama sudah digunakan',
                'email.required'=>'Email tidak boleh kosong',
                'email.email'=>'Format email salah',
                'email.unique'=>'Email sudah digunakan',
                'status.required'=>'Status tidak boleh kosong',
                'status.digits_between'=>'Status 3-10 karakter',
                'password.required_with'=>'Password tidak boleh kosong',
                'password.same'=>'Password berbeda',
                'password.digits_between'=>'Password minimal 8 karakter',
                'file.required'=>'File tidak boleh kosong',
                'file.max'=>'File maksimal 700 KB',
                'password_confirmation.required'=>'Ulangi password tidak boleh kosong',
                'password_confirmation.digits_between'=>'Ulangi password minimal 8 karakter'
            ]);

        if ($validator->fails()){
            // Dd($validator->errors());
            return redirect('user/register')->withErrors($validator->errors());
        } else {
            $file = $request->file('file');
            $tujuan = 'fotouser\\';
            $disimpan = $tujuan . $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());

            $new = new User;
            $new->name = $request->name;
            $new->email = $request->email;
            $new->password = Hash::make($request->password);
            $new->status = $request->status;
            $new->profile_image = $disimpan;
            Session::put('user',$new->name);
            Session::put('email',$new->email);
            $email = $new->email;
            $name = $new->name;
            $data = array("email" => $email, "name" => $name);
            $new->save();

            Mail::to($request->email)->send(new verifyuser($data));

            return redirect('/user/verify');
        }
    }

    public function verifyemailuser($email){
        $veri = DB::statement('UPDATE users SET users.`email_verified_at`=NOW() WHERE users.email = ?',array($email));
        return redirect('user/login');
    }
    public function loginsubmit(Request $request){
        $login =$request->only('email','password');

        if(Auth::guard('user')->attempt($login)){
            return redirect('user/dashboard');
        }else{  
            return redirect('user/login?alert=belum_terdaftar');
        }
    
    }

    public function logout(){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
            return redirect('user/login');
    }

    public function productuser(){
        return view('user/productuser');
    }

    public function verifymail(){
        return view('user/verify');
    }
}
