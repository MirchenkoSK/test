<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'products' => Product::paginate(3)
        ];
        return view('welcome', $data);
    }

    public function home()
    {
        $this->middleware('auth');
        $data = [
            'products' => Product::paginate(3)
        ];
        return view('home', $data);
    }
}
