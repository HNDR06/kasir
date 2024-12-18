<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }

  public function login(Request $request)
  {
    $data = [
      'email' => $request->input('email'),
      'password' => $request->input('password'),
    ];
    // dd($data);

    if (Auth::attempt($data)) {
      return redirect()->route('pages-home');
    } else {
      return redirect()->route('auth-login-basic')->withErrors('Username dan Password Tidak Sesuai')->withInput();
    }
  }
}
