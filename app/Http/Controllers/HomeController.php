<?php

namespace App\Http\Controllers;

use App\Item;
use App\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($id, $name)
    {
        $item = Item::where('sub_categories_id', $id)->get();
        $subCategory = SubCategory::where('id', $id)->where('name', $name)->firstOrFail();

        return view('mb.category_item', [
            'items' => $item,
            'subCategory' => $subCategory
        ]);
    }

    public function item($cat_name)
    {
        return view('mb.details');
    }

    public function cart()
    {
        return view('mb.cart');
    }

    public function registration()
    {
        return view('registration');
    }
}
