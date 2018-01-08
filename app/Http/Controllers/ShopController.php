<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 26/11/2017
 * Time: 6:17 PM
 */

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop', compact('products', 'categories'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('category', compact('category', 'categories'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $count = 0;
        $product = Product::find($request['productId']);
        if($product){
            $cart = [];
            if(Session::has('cart')) {
                $cart = Session::get('cart');
            }

            $found = false;
           foreach ($cart as $index=> $productArray) {
                $obj = $productArray['product'];
                if($obj->id == $product->id) {
                    $found = true;
                    $count_old = $productArray['count'];
                    unset($cart[$index]);
                    $cart []=[
                      'count' => $count_old+1,
                      'product'=>$product
                    ];
                }
           }
           if(! $found) {
               $cart[] = [
                   'count' => 1,
                   'product' => $product
               ];
           }
           foreach ($cart as $productArray)
           {
               $count+=$productArray['count'];
           }

           Session::put('cart', $cart);

            return response()->json([
                'errors' => false,
                'data' => $cart,
                'count' => $count
            ]);
        }
    }

    public function deleteProduct(Request $request)
    {
        $productId = $request['productId'];
        $cart = Session::get('cart');
        foreach ($cart as $index => $productArray) {
            if($productArray['product']->id == $productId) {
                unset($cart[$index]);
                Session::forget('cart');
                Session::put('cart', $cart);

            }
        }
        return response()->json([
            'errors' => false,
            'data' => $cart,
            'count' => count($cart)
        ]);
    }
    public function incrementDecrement(Request $request)
    {
        $count = 0;
        $total = 0;
        $product =Product::find($request['productId']);
        $productId = $request['productId'];
        $cart = Session::get('cart');
        foreach ($cart as $index=> $productArray)
        {
            if ($productArray['product']->id == $productId)
            {
              unset($cart[$index]);
              $cart[]= [
                  'count'=> $request['val'],
                  'product'=> $product
              ];
              $total = $productArray['product']->price * $request['val'];
            }
        }
        Session::put('cart', $cart);
        foreach ($cart as $item) {
            $count+=$item['count'];
            }
        return response()->json([
            'errors' => false,
            'data' => $cart,
            'count' => $count,
            'total' =>$total
        ]);

    }
}