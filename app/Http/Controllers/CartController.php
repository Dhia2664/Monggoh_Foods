<?php

namespace App\Http\Controllers;

use App\Models\Item; // Corrected the import to match the model name
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Display the cart
    public function showCart()
    {
        // Get all items in the cart
        $cartItems = Cart::getContent();

        // Count the number of items in the cart
        $cartCount = $cartItems->count(); // Using count() on the collection

        // Return view with cart data
        return view('cart.index', compact('cartItems', 'cartCount'));
    }

    // Add item to cart
    public function addToCart(Request $request, $itemId)
    {
        // Validate the input for quantity (optional)
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1', // Ensure quantity is a positive integer
        ]);

        // Get the item from the database
        $item = Item::find($itemId); // Corrected the class reference

        // Ensure the item exists
        if ($item) {
            // Add the item to the cart
            Cart::add([
                'id' => $item->id, // Item ID
                'name' => $item->name, // Item name
                'price' => $item->price, // Item price
                'quantity' => $validated['quantity'], // Validated quantity
            ]);
        }

        // Redirect to the cart page after adding the item
        return redirect()->route('cart.show');
    }

    // Remove item from the cart
    public function removeFromCart($itemId)
    {
        // Remove the item from the cart by ID
        Cart::remove($itemId);

        // Redirect back to the cart page
        return redirect()->route('cart.show');
    }
}
