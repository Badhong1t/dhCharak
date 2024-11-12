<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function home()
    {
        $products = Product::where('status', 'active')->limit(12)->get();
        return view('frontend.layouts.home', compact('products'));
    }
    public function products(){
        $products = Product::where('status', 'active')->get();
        $categories = Category::all();
        return view('frontend.layouts.products.index',compact('products', 'categories'));

    }

    public function productDetails($slug){

        $product = Product::with(['images','attribute_values'])->where('slug', $slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->limit(8)->get();
        return view('frontend.layouts.product_details.index', compact('product', 'related_products'));

    }
    public function productsBySubcategory($id){

        $products = Product::where('status', 'active')->where('subcategory_id', $id)->get();
        return view('frontend.layouts.products.subcategory_product', compact('products'));
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


    public function orders() {

        return view('frontend.layouts.orders.index');

    }

    public function accountDetails(){

        return view('frontend.layouts.account_details.index');

    }


}
