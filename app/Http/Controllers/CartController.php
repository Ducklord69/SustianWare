<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Show items in the cart
    public function index()
    {
        // Get cart items from session
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Add a product to the cart
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        // If the product is already in the cart, increase quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Add new product to the cart
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Update quantity of a product in the cart
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully');
        }

        return redirect()->back()->with('error', 'Product not found in cart');
    }

    // Remove a product from the cart
    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed from cart');
        }

        return redirect()->back()->with('error', 'Product not found in cart');
    }
}
