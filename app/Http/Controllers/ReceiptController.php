<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Receipt;
use App\Models\Cart;
use App\Http\Controllers\CartController;
use illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function receipt() {
        $cartItems = Cart::where('phonenumber', Auth::user()->phonenumber)->get();
        return view('receipt', ['cartItems' => $cartItems]);
    }
    
}
