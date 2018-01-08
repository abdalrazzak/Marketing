<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/11/17
 * Time: 12:09 ص
 */

namespace App\Http\Controllers;


use App\Category;
use App\Product;

class PageController extends Controller
{

    public function home()
    {
        //$products = Product::where('name', 'like', 'iphon%')->get();
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function viewPage($slug)
    {
        $categories = Category::all();
        return view($slug,compact('categories'));
    }

}