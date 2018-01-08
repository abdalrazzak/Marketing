<?php
/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 28/10/2017
 * Time: 7:17 PM
 */

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {
        $categories=Category::all ();
        return view('admin.category.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->create($request->all());

        return redirect()->route('admin.category.index')
            ->with('success', 'You have successfully created the category');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {

    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('success', 'You have successfully deleted the category');
    }
}