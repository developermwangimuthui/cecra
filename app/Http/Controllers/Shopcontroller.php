<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Shopcontroller extends Controller
{
    public function showShops(){
        $categories = Category::where('business_type_id', 1)->get();
        $catsorted = $categories->sortBy('category_name')->pluck('category_name');
        $p_categories = Category::limit(6)->get();

        // dd($catsorted);
        return view('pages.shops')->with(['catsorted'=>$catsorted,'p_categories'=>$p_categories]);
    }
}
