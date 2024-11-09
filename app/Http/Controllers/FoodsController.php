<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FoodsController extends Controller
{ 
    public function foodsCategory() {
        
        $foods_category = DB::table('foods')->distinct()->pluck('category');
        
        return view('home', ['foods_category' => $foods_category]);
    }
}
