<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\User;

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

    // Return halaman dashboard
    // return redirect()->route('auth.login')->with('message', 'Berhasil daftar, silahkan login!');
  }
}
