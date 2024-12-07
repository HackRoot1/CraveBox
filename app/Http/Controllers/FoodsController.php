<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FoodsController extends Controller
{ 
    public function foodsCategory() {
        
        $foods_category = DB::table('foods')->distinct()->pluck('category');
        $food_data = DB::table('foods')->limit(6)->get();
        $food_item = DB::table('foods')->limit(8)->get();
        // dd($food_item);

        return view('home', ['foods_category' => $foods_category, 'foods_data' => $food_data,'food_item'=>$food_item]);
        
    }
    
    public function foodDish(){
        $foodish=DB::table('foods')->paginate(5);
        
        return view('food-page',['foodish'=>$foodish]);
    }
    
}
