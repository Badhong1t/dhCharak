<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class PaymentController extends Controller
{
    public function checkout(){
        if(!Auth::check()){
            session()->flash('error', 'Please login first');
            return redirect()->route('login');
        }
        return view('frontend.layouts.checkout.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|phone',
            'address' => 'required|string|max:255',
            'island' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email',
        ],[
            'phone.phone' => 'invalid phone number',
        ]);

        if (\auth()->user()->role === 'admin'){
            return response()->json([
                'success' => false,
                'message' => "You are an admin. You can't buy product",
            ], 401);
        }
    }
}
