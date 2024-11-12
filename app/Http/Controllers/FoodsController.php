<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FoodsController extends Controller
{ 
    public function foodsCategory() {
        
        $foods_category = DB::table('foods')->distinct()->pluck('category');
        $food_data = DB::table('foods')->limit(6)->get();
                        // restart karun bgh laptop 
        dd($food_data); 
        return view('home', ['foods_category' => $foods_category, 'foods_data' => $food_data]);
        
    }
    
}
