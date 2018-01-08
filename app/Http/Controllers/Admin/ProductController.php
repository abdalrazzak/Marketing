<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 28/10/2017
 * Time: 7:14 PM
 */

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends  Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        //$this->authorize('create', Product::class);
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->create($request->all());
        /*$product = $product->create([
            'name' => $request['name'],
            'description' => $request['description']
        ]);*/

        $ids = $request['categories'];

          if(! empty($ids)) {
              foreach ($ids as $id) {
                  $product->categories()->attach($id);
              }
          }

        return redirect()->route('admin.product.index')
            ->with('success', 'You have successfully created the product');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        $productCategories = [];
        foreach ($product->categories as $category) {
            $productCategories[] = $category->id;
        }

        return view('admin.product.edit', compact('product', 'categories', 'productCategories'));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all());

        $ids = $request['categories'];

        $product->categories()->sync($ids);

        return redirect()->route('admin.product.index')
            ->with('success', 'You have successfully updated the product info');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        foreach ($product->categories as $category) {
            $product->categories()->detach($category->id);
        }

        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('success', 'You have successfully deleted the product');
    }
}