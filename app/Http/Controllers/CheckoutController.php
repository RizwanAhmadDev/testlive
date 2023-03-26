<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //


    public function checkout(Request $request)
    {
        // $hotel = Hotel::all();
        // dd($request->taxi_price);
        $order_price=$request->taxi_price;
        $order_name=$request->route;

        $taxi_name=$request->taxi_name;

        $order_name_taxi=$request->route.'('.$request->taxi_name.')';

        $lineItems[] = [
            'price_data' => [
                'currency' => 'sar',
                'product_data' => [
                    'name' => $order_name_taxi,
                    // 'images' => [$product->image]
                ],
                'unit_amount' => $order_price * 100,
            ],
            'quantity' => 1,
        ];
                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
                $checkout_session = \Stripe\Checkout\Session::create([
                    'line_items' => $lineItems,
                    'mode' => 'payment',
                    'success_url' => route('success',[],true),
                    'cancel_url' =>  route('cancel',[],true),

                ]);
                return redirect($checkout_session->url);
        // dd($request->all());
        // return view('userview.checkout', compact('order_price','order_name','taxi_name'));
    }

    public function success(){
        return view('userview.success');

    }
    public function cancel(){
        return view('AllVehicles');

    }
}
