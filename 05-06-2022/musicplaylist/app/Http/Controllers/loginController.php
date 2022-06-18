<?php

namespace App\Http\Controllers;

use App\Models\music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class loginController extends Controller
{

    public function index(){
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request){

        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credential)){
            $role = Auth::user()->role;
            if ($role == "admin"){
                return redirect(route('admin.musicControl'));
            } else {
                return redirect()->intended('/dashboard');
            }
            $request->session()->regenerate();

        }

        return back()->with('loginError', 'Login failed');
        //dd('berhasil login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/')->with('message', 'you are logout');
    }
}
