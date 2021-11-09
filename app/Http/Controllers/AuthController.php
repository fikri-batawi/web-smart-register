<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;

use App\User;
use Auth;

class AuthController extends Controller
{
  public function register(){
    return view('auth.register');
  }
  public function login(){
    return view('auth.login');
  }
  public function postRegister(Request $request){
    // Register User
    $data = [
      'username'    => $request->username,
      'phone'       => $request->phone,
      'gender'      => $request->gender,
      'birth_date'  => $request->ttl,
      'address'     => $request->alamat,
      'email'       => $request->email,
      'password'    => Hash::make($request->password),
      'role'        => 'user',
    ];
    $user = User::create($data);

    return redirect()->route('auth.login')->with('message', 'Berhasil daftar, silahkan login!');
  }
  public function postLogin(Request $request){
    // Login User
    $email    = $request->email;
    $password = $request->password;

    $user = User::where('email', $email)->first();
    if(!$user){
      return back()->with('error', 'User tidak terdaftar! ');
    }
    if (!Hash::check($password, $user->password)) {
      return back()->with('error', 'Password salah!');
    }

    $credentials  = [
      'email'     => $email,
      'password'  => $password,
    ];
    // Return halaman dashboard
    if (Auth::attempt($credentials)) {
      return redirect()->route('dashboard.index');
    }
  }
  public function postLogout(){
    Auth::logout();
    return redirect()->route('auth.login');
  }
}
