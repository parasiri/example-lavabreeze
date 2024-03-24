<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProductPageController extends Controller
{
    /**
     * Display the Product view
     */


    public function index(): View
    {
        return view('productpage');
    }


}
