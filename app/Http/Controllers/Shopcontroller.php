<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use App\Models\Vendor;
use App\Models\VendorProduct;
use App\Models\VendorProductImage;
use Illuminate\Support\Facades\DB;

class Shopcontroller extends Controller
{
    public function showShops(){
        $categories = Category::where('business_type_id', 1)->get();
        $catsorted = $categories->sortBy('category_name')->all();
        $p_categories = Category::limit(6)->get();

        $shops = Vendor::where('business_type', 'Shops')->inRandomOrder()->get();
        $products = VendorProduct::inRandomOrder()->take(8)->get();


        // dd($products);

        // dd($catsorted);
        return view('pages.shops')->with([
            'catsorted'=>$catsorted,
            'p_categories'=>$p_categories,
            'shops'=>$shops,
            'products'=>$products,
            ]);
    }
}
