<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use net\authorize\api\controller\CreateTransactionController;

class PaymentController extends Controller
{
    public function checkout()
    {
        if (!Auth::check()) {
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
        ], [
            'phone.phone' => 'invalid phone number',
        ]);

        if (\auth()->user()->role === 'admin') {
            return response()->json([
                'success' => false,
                'message' => "You are an admin. You can't buy product",
            ], 401);
        }
    }


    public function processPayment(Request $request)
    {


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
        ], [
            'phone.phone' => 'invalid phone number',
        ]);

        if (\auth()->user()->role === 'admin') {
            return response()->json([
                'success' => false,
                'message' => "You are an admin. You can't buy product",
            ], 401);
        }

        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        $refId = 'ref' . time();
        dd($merchantAuthentication);
        // Card details
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber("4111111111111111");
        $creditCard->setExpirationDate("12/25");
        $creditCard->setCardCode("123");

        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount(10.00);
        $transactionRequestType->setPayment($paymentOne);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);

        $controller = new CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        if ($response != null && $response->getMessages()->getResultCode() == "Ok") {
            return response()->json(['success' => true, 'transaction_id' => $response->getTransactionResponse()->getTransId()]);
        } else {
            return response()->json(['success' => false, 'message' => $response->getMessages()->getMessage()[0]->getText()]);
        }
    }
}
