<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        // return bcrypt('12345');
        return view('login');
    }

    function aksiLogin(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],[
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);



        if (Auth::guard('role')->attempt(['username' => $request->username, 'password' => $request->password])) {
            $role = Auth::guard('role')->user()->status;

            if ($role == 'Operator') {

                $request->session()->regenerate();
                return redirect()->intended('operator/dashboard')->with('success', 'Selemat data operator !');;
            }elseif ($role == 'Dosen') {

                $request->session()->regenerate();
                return redirect()->intended('dosen/dashboard')->with('success', 'Selemat data dosen !');
            }else{
                return back()->with('danger', 'Login Gagal !');
            }
        }else{
            return back()->with('danger', 'Login Gagal !');
        }

    }

    function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->intended('/')->with('success', 'Anda telah logout dari sistem !');
    }
}
