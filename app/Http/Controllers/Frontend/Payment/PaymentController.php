<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use net\authorize\api\constants\ANetEnvironment;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class PaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Please login first');
            return redirect()->route('login');
        }
        $CartItems = Cart::content();
        return view('frontend.layouts.checkout.index',compact('CartItems'));
       //return view('test',compact('CartItems'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function processPayment(Request $request): RedirectResponse
    {
        //dd($request->all());
        /* $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'regex:/^(\+?\d{1,3}[-.\s]?|\d{1,4})?((\d{10})|\d{3}[-.\s]?\d{3}[-.\s]?\d{4})$/'],
            'address' => 'required|string|max:255',
            'island' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email',
        ], [
            'phone.regex' => 'invalid phone number',
        ]); */


        $cardNumber = $request->input('card_number');
        $expirationDate = $request->input('expiration_date');
        $cvv = $request->input('cvv');

        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('AUTHORIZENET_API_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('AUTHORIZENET_TRANSACTION_KEY'));

        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($cardNumber);
        $creditCard->setExpirationDate($expirationDate);
        $creditCard->setCardCode($cvv);

        $payment = new AnetAPI\PaymentType();
        $payment->setCreditCard($creditCard);

        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount('3455.00');
        $transactionRequestType->setPayment($payment);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId("ref" . time());
        $request->setTransactionRequest($transactionRequestType);

        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        if ($response != null) {
            $tresponse = $response->getTransactionResponse();

            if ($tresponse != null & $tresponse->getResponseCode() == "1") {
                return back()->with('success', 'Payment successful!');
            } else {
                return back()->with('error', "Payment failed: ");
            }
        } else {
            return back()->with('error', "Payment failed: " . $response->getMessages()->getMessage()[0]->getText());
        }

    }
}
