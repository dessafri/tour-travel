<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackages;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $items = TravelPackages::with(['galleries'])->paginate(4);
        return view(
            'pages.home',
            [
                'items' => $items
            ]
        );
    }
}
