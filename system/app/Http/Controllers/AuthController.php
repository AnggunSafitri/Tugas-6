<?php  

namespace App\Http\Controllers;
use App\Models\User;

class AuthController extends Controller
{
    function login(){
        return view('backview.login');
    }

    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/')->with('success', 'Selamat Datang');
        }

        return redirect('login')->with('success', 'Password Yang Anda Masukkan Salah');
    }

    public function logout(){
        auth()->logout();
		
        return redirect('login');
    }

}