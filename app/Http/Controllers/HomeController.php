<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $promociones = [
            [ 
                "name" => "Papa Combo", 
                "prize" => 19500, 
                "description" => "Pizza de 3 Ing, appetizer simple más bebida.", 
                "img" => "https://cdn.papajohns.cl/thumbnails/offers/combofamiliar_1619191848_small.jpg" 
            ],
            [ 
                "name" => "Papa Refresh", 
                "prize" => 18000, 
                "description" => "Arma tu pizza familiar (3 ing) + bebida 1.5
                lts. a elección + Coca Cola sin azúcar 1.5 lts.
                de regalo", 
                "img" => "https://cdn.papajohns.cl/thumbnails/offers/caluga_1628520581_small.jpg" 
            ],
            [
                "name" => "Big Combo", 
                "prize" => 10000, 
                "description" => "Selecciona 5 pizzas de especialidad de 2 o
                3 ingredientes!", 
                "img" => "https://cdn.papajohns.cl/thumbnails/offers/bigcombo_1617820358_small.jpg"
            ],
            [
                "name" => "Combo Rolls", 
                "prize" => 20000, 
                "description" => "Rolls de Pepperoni o Jamón, Pizza familiar
                de 3 Ingredientes y Bebida de 2.5 lts", 
                "img" => "https://cdn.papajohns.cl/thumbnails/offers/bigcombo_1617820358_small.jpg"
            ]
        ];

        return view('home', compact('promociones'));
    }
}
