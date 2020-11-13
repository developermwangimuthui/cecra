<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorProductImage extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['vendor_product_image','vendor_product_id'];

    public function product()
    {
        return $this->belongsTo('App\Models\VendorProduct', 'vendor_product_id', 'vendor_product_image_id');
    }

}
