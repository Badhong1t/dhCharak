<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
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

        $product = Product::with(['attribute_value','images'])->where('slug', $slug)->first();

        $product_attributes = ProductAttribute::with('value')->where('product_id', $product->id)->get();

        $related_products = Product::where('category_id', $product->category_id)->limit(8)->get();
        return view('frontend.layouts.product_details.index', compact('product', 'related_products', 'product_attributes'));

    }
    public function productsBySubcategory($id){

        $products = Product::where('status', 'active')->where('subcategory_id', $id)->get();
        return view('frontend.layouts.products.subcategory_product', compact('products'));
    }
    public function cart(){

        return view('frontend.layouts.my_cart.index');

    }

    public function checkout(){

        return view('frontend.layouts.checkout.index');

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



}
