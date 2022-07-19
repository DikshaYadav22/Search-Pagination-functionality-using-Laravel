<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request)
    
    {
        if(isset($_GET['query']))
        {
            $search_text = $_GET['query'];
            $products = DB::table('products')->WHERE('name', 'LIKE', '%'.$search_text.'%')->paginate(2)->withQueryString();
            return view('search')->with('products', $products);

        }
        return view('search');
    }

}
