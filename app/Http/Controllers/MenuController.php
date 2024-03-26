<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Categories;

class MenuController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // $menus = Menu::all();
    //     // return view('dashboard',['menus'=>$menus]);
    // }

    public function index()
    {
        $menus = Menu::all(); // Fetch all menu items from the database
        return view('dashboard', ['menus' => $menus]); // Pass the menus to the dashboard view
    }
}
