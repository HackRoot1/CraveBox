<?php

namespace App\Http\Controllers;

use App\Models\Shopping_cart;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;

class FoodsController extends Controller
{
    public function foodsCategory()
    {
        $foods_category = DB::table('foods')->distinct()->pluck('category');
        $food_data = DB::table('foods')->limit(6)->get();
        $food_item = DB::table('foods')->limit(8)->get();
        return view('home', ['foods_category' => $foods_category, 'foods_data' => $food_data, 'food_item' => $food_item]);
    }

    public function singleFoodData($id)
    {
        $food_data = DB::table('foods')->where('id', $id)->first();
        $relatedProducts = DB::table('foods')->where('category', $food_data->category)->where('id', '!=', $id)->limit(4)->get();
        return view('single-food', ['food_data' => $food_data, 'relatedProducts' => $relatedProducts]);
    }

    public function foodDish($filterValue = null)
    {
        if (isset($filterValue)) {
            $foodish = DB::table('foods')->where('category', $filterValue)->paginate(12);
            $foodCount = DB::table('foods')->where('category', $filterValue)->count();
        } else {
            $foodish = DB::table('foods')->paginate(12);
            $foodCount = DB::table('foods')->count();
        }

        $foods_category = DB::table('foods as t1')
            ->select('t1.category', 't1.image')
            ->whereIn('t1.id', function ($query) {
                $query->select(DB::raw('MIN(id)'))
                    ->from('foods as t2')
                    ->whereRaw('t1.category = t2.category')
                    ->groupBy('t2.category');
            })
            ->get();
        return view('food-page', ['foodish' => $foodish, 'foodCount' => $foodCount, 'foods_category' => $foods_category]);
    }

    public function addShopingCart(Request $request, $id)
    {

        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }

        $food_id = $id;
        $user_id = Auth::user()->id;

        $shopingCart = DB::table('shopping_carts')->insertOrIgnore(
            [
                'user_id' => $user_id,
                'food_id' => $food_id,
            ]
        );

        if ($shopingCart) {
            flash()->success('Item is successfully added.');
        } else {
            flash()->success('Item is already present in the cart.');
        }
        $shoppingCartList = DB::table('shopping_carts')->where('user_id', '=', $user_id)->get();
        return redirect()->route('shopping.cart', ['shoppingCartList' => $shoppingCartList]);
    }

    public function deleteShopingCart($id)
    {

        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }

        $food_id = $id;

        $shoppingCartList = DB::table('shopping_carts')->where('user_id', Auth::user()->id)->where('food_id', $food_id)->delete();
        flash()->success('Successfully deleted item from shopping cart.');
        return redirect()->route('shopping.cart', ['shoppingCartList' => $shoppingCartList]);
    }

    public function ShopingCart()
    {
        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }

        $user_id = Auth::user()->id;
        $shoppingCartList = DB::table('shopping_carts')->where('user_id', Auth::user()->id)->join('foods', 'shopping_carts.food_id', '=', 'foods.id')->get();
        return view('shopping-cart', compact('shoppingCartList'));
    }

    public function wishlist()
    {
        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }
        $wishlists = DB::table('wishlists')->where('user_id', Auth::user()->id)->join('foods', 'wishlists.food_id', '=', 'foods.id')->paginate(5);
        // return redirect()->route('wishlist', compact('wishlists'))->with('success', 'Successfully item added to wishlist.');
        return view('wishlist', compact('wishlists'));
    }

    public function addToWishlist($id)
    {

        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }

        $food_id = $id;
        $user_id = Auth::user()->id;

        $wishlist = DB::table('shopping_carts')->insertOrIgnore(
            [
                'user_id' => $user_id,
                'food_id' => $food_id,
            ]
        );

        if ($wishlist) {
            flash()->success('Successfully item added to wishlist.');
        } else {
            flash()->success('Item is already present in the wishlist.');
        }

        $wishlists = DB::table('wishlists')->where('user_id', Auth::user()->id)->join('foods', 'wishlists.food_id', '=', 'foods.id')->paginate(2);
        return redirect()->route('wishlist', compact('wishlists'));
    }

    public function deleteToWishlist($id)
    {

        if (!isset(Auth::user()->id)) {
            return redirect()->route('login');
        }

        $food_id = $id;
        $user_id = Auth::user()->id;

        $wishlists = DB::table('wishlists')->where('user_id', Auth::user()->id)->where('food_id', $food_id)->delete();
        flash()->success('Successfully item deleted from wishlist.');
        return redirect()->route('wishlist', compact('wishlists'));
    }


    public function checkoutFood()
    {
        $key = env('RAZORPAY_KEY');
        $orders = DB::table('orders')->join('foods', 'orders.food_id', 'foods.id')->get();
        return view('checkout-page', ['orders' => $orders, 'key' => $key]);
    }
}
