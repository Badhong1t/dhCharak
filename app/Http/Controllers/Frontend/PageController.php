<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('frontend.layouts.home');
    }

    public function specialOrders(){

        return view('frontend.layouts.special_orders.index');

    }

    public function specialOrdersForm(){


        return view('frontend.layouts.special_orders.form');

    }

    public function howWorks(){

        return view('frontend.layouts.how_works.index');

    }

    public function handlingGoods(){

        return view('frontend.layouts.handling_goods.index');

    }

    public function deliveryDetails(){

        return view('frontend.layouts.delivery_details.index');

    }

    public function pickupLocations(){

        return view('frontend.layouts.pickup_locations.index');

    }

    public function privacyStatement(){

        return view('frontend.layouts.privacy.index');

    }

    public function termsAndConditions(){

        return view('frontend.layouts.terms.index');

    }

    public function products(){


        return view('frontend.layouts.products.index');

    }

    public function productDetails(){

        return view('frontend.layouts.product_details.index');

    }

    public function cart(){

        return view('frontend.layouts.my_cart.index');

    }

    public function checkout(){

        return view('frontend.layouts.checkout.index');

    }

    public function orders() {

        return view('frontend.layouts.orders.index');

    }

    public function accountDetails(){

        return view('frontend.layouts.account_details.index');

    }


}
