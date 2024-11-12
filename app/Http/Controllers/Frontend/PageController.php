<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CMS;
use App\Models\Product;

class PageController extends Controller
{

    public function home()
    {
        $products = Product::where('status', 'active')->limit(12)->get();
        $data = CMS::where('page', page::Homepage)->where('section_name', section::StayConnectedWithBulksail)->first();

        return view('frontend.layouts.home', compact('products', 'data'));
    }
    public function products(){
        $products = Product::where('status', 'active')->get();
        $categories = Category::all();
        return view('frontend.layouts.products.index',compact('products', 'categories'));

    }

    public function productDetails($slug){

        $product = Product::with(['images','attribute_values'])->where('slug', $slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->limit(8)->get();
        return view('frontend.layouts.product_details.index', compact('product', 'related_products', ));

    }
    public function productsBySubcategory($id){

        $products = Product::where('status', 'active')->where('subcategory_id', $id)->get();
        return view('frontend.layouts.products.subcategory_product', compact('products'));
    }
    public function specialOrders(){

        $dataDynamic = CMS::where('page', page::SpecialOrders)->where('section_name', section::SpecialOrdersSectionDynamic)->limit(4)->get();

        $dataStatic = CMS::where('page', page::SpecialOrders)->where('section_name', section::SpecialOrdersSectionStatic)->first();

        return view('frontend.layouts.special_orders.index', compact('dataDynamic','dataStatic'));

    }

    public function specialOrdersForm(){


        return view('frontend.layouts.special_orders.form');

    }

    public function howWorks(){

        $dataStatic = CMS::where('page', page::HowItWorks)
        ->where('section_name', section::WhyChooseBulksailSectionStatic)->first();

        $dataDynamic = CMS::where('page', page::HowItWorks)
        ->where('section_name', section::WhyChooseBulksailSectionDynamic)->limit(4)->get();

        $dataStatic2 = CMS::where('page', page::HowItWorks)
        ->where('section_name', section::HowItWorksSectionStatic)->first();

        $dataDynamic2 = CMS::where('page', page::HowItWorks)
        ->where('section_name', section::HowItWorksSectionDynamic)->limit(8)->get();

        $viewData = [
            'dataStatic' => $dataStatic,
            'dataDynamic' => $dataDynamic,
            'dataStatic2' => $dataStatic2,
            'dataDynamic2' => $dataDynamic2
        ];

        return view('frontend.layouts.how_works.index', $viewData);

    }

    public function handlingGoods(){

        $dataDynamic = CMS::where('page', page::HandlingFrozenGoods)
        ->where('section_name', section::HandlingFrozenGoodsDynamic)->limit(4)->get();

        $dataStatic = CMS::where('page', page::HandlingFrozenGoods)
        ->where('section_name', section::HandlingFrozenGoodsStatic)->first();

        return view('frontend.layouts.handling_goods.index', compact('dataDynamic','dataStatic'));

    }

    public function deliveryDetails(){

        $data = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksSectionStatic)
            ->first();

        $image1 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage1)
            ->first();

        $image2 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage2)
            ->first();

        $image3 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage3)
            ->first();

        $viewData = [
            'data' => $data,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ];

        return view('frontend.layouts.delivery_details.index', $viewData);

    }

    public function pickupLocations(){

        $data = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsSectionStatic)
            ->first();

        $image1 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage1)
            ->first();

        $image2 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage2)
            ->first();

        $image3 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage3)
            ->first();

        $viewData = [
            'data' => $data,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ];

        return view('frontend.layouts.pickup_locations.index', $viewData);

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
