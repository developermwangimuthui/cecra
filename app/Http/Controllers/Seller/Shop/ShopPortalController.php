<?php

namespace App\Http\Controllers\Seller\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\VendorProduct;
use App\Models\Category;
use App\Models\BusinessType;
use App\Models\VendorProductColor;
use App\Models\VendorProductImage;
use App\Models\VendorProductSize;

class ShopPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
        $bizType = Vendor::where('raw_email', 'ndirashjose@gmail.com')->first();

        $banner = $bizType->shop_image;

        return view('seller.shop.Shop_Portal.index')->with('banner', $banner); */

        // dd($bizType->coverimage);

        if (session()->has('businessuser_info')) {
            $user_info = session()->get('businessuser_info', 'default');
            $id = $user_info['user_id'];
            $vendor = Vendor::where('vendor_id', $id)->take(1)->first();
            // Get shop categories
            $biz = $vendor->business_type;
            $bizType = BusinessType::where('business_type_name', $biz)->pluck('business_type_id');
            $shop_categories = Category::where('business_type_id', $bizType)->get();
            $products = VendorProduct::where('vendor_id', $vendor->vendor_id)->get();

            $categories = Category::all();
            $p_categories = Category::limit(6)->get();


            $unique = $shop_categories->sortBy('category_name')->all();
            // $shop_categories = Category::pluck('shop_category_name');
            // dd($shop_categories);


            return view('Shop_Portal.index')->with(['vendor' => $vendor, 'Scategories' => $unique, 'p_categories' => $p_categories]);
        } else {
            return redirect('bus/signin');
        }
    }


    public function showCategory($category_id)
    {
        //

        $try = Category::all();
        $categories = Category::where('business_type_id', 1)->get();
        $categoryImage = Category::where('business_type_id', 1)->pluck('category_image');
        $unique = $categories->sortBy('category_name')->all();
        $fine = Category::where('category_id', $category_id)->first();

        // Get shops by category
        $categoryName = Category::where('category_id', $category_id)->first();
        $shops = Vendor::where('category', $categoryName->spanish_translation)->get();





        // $shops = Vendor::where('vendor_id', $did)->get();
        // dd($shops);

        return view('pages.shop_category')->with([
            'images' => $categoryImage,
            'Scategories' => $unique,
            'try' => $categories,
            'fine' => $fine,
            'final' => $shops,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showProduct()
    {
        //
        // $Product = VendorProduct::where('vendor_product_id', $vendor_product_id);
        $Product = VendorProduct::where('vendor_product_id', 1 )->first();
        $shop = Vendor::firstWhere('vendor_id', $Product->vendor_id);
        $product_size = VendorProductSize::where('vendor_product_id', $Product->vendor_product_id)->get();
        $product_color = VendorProductColor::where('vendor_product_id', $Product->vendor_product_id)->get();
        $product_image = VendorProductImage::where('vendor_product_id', $Product->vendor_product_id)->first();
        $product_image_thumb = VendorProductImage::where('vendor_product_id', $Product->vendor_product_id)->get();

        // dd($product_image);
        return view('Shop_Portal.product_page')->with([
            'product'=>$Product,
            'shop'=>$shop,
            'product_size'=>$product_size,
            'product_color'=>$product_color,
            'product_image'=>$product_image,
            'product_image_thumb'=>$product_image_thumb,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
