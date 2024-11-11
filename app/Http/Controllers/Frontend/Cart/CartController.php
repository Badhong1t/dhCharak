<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        // Display the cart page
       $items = Cart::content();
        return view('frontend.layouts.my_cart.index', compact('items'));
    }

    public function addToCart(Request $request)
    {
        // Add the product to the cart
        Cart::add(['id' => $request->product_id, 'name' => $request->title, 'qty' => $request->quantity, 'price' => $request->customer_price, 'options' => ['thumbnail' => $request->thumbnail]]);
        flash()->success('Product added to cart successfully');
        return redirect()->back();

    }
    public function increase_cart_quantity($rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, $product->qty + 1);
        flash()->success('Product quantity updated successfully');
        return redirect()->back();
    }
    public function decrease_cart_quantity($rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, $product->qty - 1);
        flash()->success('Product quantity updated successfully');
        return redirect()->back();
    }

    public function remove_item($rowId)
    {
        Cart::remove($rowId);
        flash()->success('Product removed successfully');
        return redirect()->back();
    }

    public function empty_cart()
    {
        Cart::destroy();
        flash()->success('Cart cleared successfully');
        return redirect()->back();
    }
}
