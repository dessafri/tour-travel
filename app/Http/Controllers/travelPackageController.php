<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackages;

class travelPackageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $items = TravelPackages::with(['galleries'])->paginate(12);
        return view(
            'pages.travelPackage',
            [
                'items' => $items
            ]
        );
    }
    public function search(Request $request)
    {
        $search_item = $request->input('search_item');
        $items = TravelPackages::with(['galleries'])->where('location', 'LIKE', '%' . $search_item . '%')->paginate(12);


        return view(
            'pages.travelPackage',
            [
                'items' => $items
            ]
        );


    }
}
