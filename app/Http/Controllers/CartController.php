<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Cart;
use App\Models\Menu;
use illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function show_cart() {
        $cartItems = Cart::where('phonenumber', Auth::user()->phonenumber)->get();
        return view('cart', ['cartItems' => $cartItems]);
    }

    public function delete_cart($id) {
        Cart::where('id', $id)->delete();
        return redirect()->back();
    }
    
    public function add_cart(Request $request,$id) {

        $user=Auth::user();
        
        $menu = Menu::where('Menu_id', $id)->first();

        $cart=new cart;

        $cart->name=$user->name;
        $cart->phonenumber=$user->phonenumber;
        $cart->address=$user->address;
        $cart->menu_name=$menu->name;
        $cart->price=$menu->price;
        $cart->menu_id=$menu->Menu_id;
        $cart->quantity=$request->quantity;

        $cart->save();


        return redirect()->back();
    } 
}
