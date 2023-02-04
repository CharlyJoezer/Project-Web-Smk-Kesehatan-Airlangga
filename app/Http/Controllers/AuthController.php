<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewLogin(){
        return view('auth.login');
    }
    public function authLogin(Request $request){
        try{
            $dataLogin = $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
     
            if (Auth::attempt($dataLogin)) {
                $request->session()->regenerate();
                return redirect('/dashboard');
            }

            return back()->with('message', 'Username / Password Salah!');
        }catch(Exception $e){
            return back()->with('message', 'Server Down');
        }
    }

    public function authLogout(Request $request){
        try{
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }catch(Exception $e){
            return back()->with('message', 'Server Down');
        }
    }

    public function viewRegister(){
        try{
            return view('dashboard.buatakun');
        }catch(Exception $e){
            return abort(500);
        }
    }

    public function authRegister(Request $request){
        $dataRegister = $request->validate([
            'name' => 'required|max:50',
            'password' => 'required|min:5',
            'role' => 'required'
        ]);
        $dataRegister['password'] = Hash::make($dataRegister['password']);
        if($dataRegister['role'] == 'Admin'){
            try{
                User::create($dataRegister);
                return back()->with('message_success', 'Berhasil membuat akun Admin!');
            }catch(Exception $e){
                return abort(500);
            }
        }else{
            try{
                User::create($dataRegister);
                return back()->with('message_success', 'Berhasil membuat akun Siswa!');
            }catch(Exception $e){
                return abort(500);
            }
        }

    }
}
