<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $promociones = Product::where("tipo_id", 6)->get();
        $pizzas = Product::where("tipo_id", 1)->get();
        $add = Product::where("tipo_id", 3)->get();
        $bebidas = Product::where('tipo_id', 2)->get();
        $postres = Product::where('tipo_id', 4)->get();
        $extras = Product::where('tipo_id', 5)->get();

        return view('home', compact('promociones', 'pizzas', 'add', 'bebidas', 'postres', 'extras'));
    }
}
