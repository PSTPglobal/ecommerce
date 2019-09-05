<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Categ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Categ::all();
        $pro = Product::all();
        $opinion = DB::table('opinion')
            ->select('product.idProduct','opinion.opinion','product.name')
            ->join('product','opinion.idProduct','=','product.idProduct')
            ->get();
        return view('home', compact('cat','pro','opinion'));
    }
}
