<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function guestmenu()
  {
    return view('content.menu.guestmenu');
  }
}
