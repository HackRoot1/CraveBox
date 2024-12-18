<?php

namespace App\Http\Controllers\API;

use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FoodsController extends Controller
{
    /**
     * filter for home page.
     */
    public function filterPopularDishes(Request $request)
    {
        $filterValue = $request->filterValue;

        if (isset($filterValue)) {
            if ($filterValue == 'all items') {
                $filterData = DB::table('foods')->limit(8)->get();
            } else {
                $filterData = DB::table('foods')->where('category', $filterValue)->limit(8)->get();
            }
            return response()->json([
                'status' => true,
                'message' => 'Data fetched successfully.',
                'filterData' => $filterData,
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data not found.',
        ], 401);
    }
    public function filterPopularMenu(Request $request)
    {
        $filterValue = $request->filterValue;

        if (isset($filterValue)) {
            if ($filterValue == 'all items') {
                $filterData = DB::table('foods')->limit(6)->get();
            } else {
                $filterData = DB::table('foods')->where('category', $filterValue)->limit(6)->get();
            }
            return response()->json([
                'status' => true,
                'message' => 'Data fetched successfully.',
                'filterData' => $filterData,
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data not found.',
        ], 401);
    }

    // filter for menu items 
    public function getAllFilteredData(Request $request)
    {
        $filterValue = $request->filterValue;

        if (isset($filterValue)) {
            if ($filterValue == 'all items') {
                $filterData = DB::table('foods')->paginate(12);
            } else {
                $filterData = DB::table('foods')->where('category', $filterValue)->paginate(12);
            }
            return response()->json([
                'status' => true,
                'message' => 'Data fetched successfully.',
                'filterData' => $filterData,
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data not found.',
        ], 401);
    }


    // sending data on checkout page of a specific item with quantity and size
    public function buyItem(Request $request)
    {

        $user_id = $request->user_id;
        $food_id = $request->food_id;
        $buyQuantity = $request->buyQuantity;
        $foodSize = $request->foodSize;
        $totalPrice = $request->totalPrice;
        
        $food_data = DB::table('orders')->insert([
            'user_id' => $user_id,
            'food_id' => $food_id,
            'quantity' => $buyQuantity,
            'size' => $foodSize,
            'total_price' => $totalPrice,
        ]);

        if (isset($food_data)) {
            return response()->json([
                'status' => true,
                'message' => 'Data fetched successfully.',
                'filterData' => [$food_data, $buyQuantity, $foodSize],
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data not found.',
        ], 401);
    }


    public function checkout(Request $request)
    {
        $totalAmount = $request->totalAmount * 100;
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create([
            'receipt' => 'order_rcptid_11',
            'amount' => $totalAmount, // Convert amount to paise
            'currency' => 'INR',
        ]);

        return response()->json([
            'order_id' => $order['id'],
            'amount' => $order['amount'],
            'currency' => $order['currency'],
        ]);
    }

    public function verifyPayment(Request $request)
    {

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $attributes = [
                'razorpay_order_id' => $request->razorpay_order_id,
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_signature' => $request->razorpay_signature,
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment is successful
            return response()->json(['message' => 'Payment verified successfully!']);
        } catch (\Exception $e) {
            Log::error('Payment verification failed: ' . $e->getMessage());
            return response()->json(['message' => 'Payment verification failed!'], 400);
        }
    }
}
