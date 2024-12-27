<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
  public function guestmenu()
  {
    $data = Menu::all();
    return view('content.menu.guestmenu', ['data' => $data]);
  }

  public function guestmenuadd(Request $request)
  {
    $productId = $request->input('id');
    $productName = $request->input('name');
    $productPrice = $request->input('price');
    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
      $cart[$productId]['quantity']++;
    } else {
      $cart[$productId] = [
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1,
      ];
    }

    session()->put('cart', $cart);

    return response()->json(['cart' => $cart, 'message' => 'Produk berhasil ditambahkan ke keranjang!']);
  }

  public function guestmenuremove(Request $request)
  {
    $productId = $request->input('id');
    $cart = session()->get('cart', []);

    if (isset($cart[$productId])) {
      unset($cart[$productId]);
      session()->put('cart', $cart);
    }

    session()->put('cart', $cart);

    return response()->json(['cart' => $cart, 'message' => 'Produk berhasil dihapus ke keranjang!']);
  }

  public function listmenu()
  {

    $data = Menu::all();
    return view('content.pages.pages-list-menu', ['data' => $data])->with('alert', 'hello');
  }

  public function addmenu(Request $request)
  {

    // dd($request->all());

    $request->validate(
      [
        'namamenu' => 'required|max:45',
        'kategori' => 'required|max:45',
        'harga' => 'required|numeric',
        'deskripsi' => 'required|max:45',
        'gambarmenu' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      ],
      [
        'gambarmenu.max' => 'Foto maksimal 2 MB',
        'gambarmenu.mimes' => 'File ekstensi hanya bisa jpg,png,jpeg,gif,svg',
        'gambarmenu.image' => 'File harus berbentuk image'
      ]
    );

    if (!empty($request->gambarmenu)) {
      //maka proses berikut yang dijalankan
      $fileName = 'menu-' . $request->namamenu . uniqid() . '.' . $request->gambarmenu->extension();
      //setelah tau fotonya sudah masuk maka tempatkan ke public
      $request->gambarmenu->move(public_path('assets/img/menu'), $fileName);
    } else {
      $fileName = 'noimage.png';
    }

    $data = [
      'namamenu' => $request->namamenu,
      'kategori' => $request->kategori,
      'harga' => $request->harga,
      'deskripsi' => $request->deskripsi,
      'gambarmenu' => $fileName,
    ];

    Menu::create($data);
    return redirect()->route('listmenu')->with('success', 'Berhasil Ditambahkan');
  }
}
