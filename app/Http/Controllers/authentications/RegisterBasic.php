<?php

namespace App\Http\Controllers\authentications;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterBasic extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
  }

  public function register(Request $request)
  {
    // dd($request->all());
    $request->validate(
      [
        'fullname' => 'required|min:5|max:100',
        'email' => 'required|string|email:rfc,dns|max:100',
        'password' => 'nullable|string|min:6',
        'passwordconfirm' => 'required_with:password|same:password'
      ]
    );

    $data = [
      'name' => $request->input('fullname'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
    ];

    User::create($data);
    return redirect()->route('login')->with('success','Berhasil Register');;
  }
}
