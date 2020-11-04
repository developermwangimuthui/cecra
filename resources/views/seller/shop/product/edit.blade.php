
@extends('layouts.seller')

@section('content')
    <div class="col-md-10 col-sm-10">
        <div class="row">
            <div class="col-md-12 col-sm-12 bg-white main-shadwo">
                <div class="row bg-header border-bottom">
                    <div class="col-md-12 col-sm-12">
                        <div class="navbar-nav my-4 margin-25">
                            <div class="h3">{{ trans('sentence.business.product.label.editProduct') }}</div>
                            @if(session()->has('message'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('message') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="enter-conta">

                    <form action="{{route('shop.product.update', [$id])}}" method="post" enctype="multipart/form-data"  id="frmShopProduct">
                        @csrf
{{--                        <a href="{{route('shop.product') }}" class="btn takfua-back text-white">{{ trans('sentence.business.product.label.back') }}</a>--}}
                        <h3 class="mt-2">{{ trans('sentence.business.product.label.addProduct') }}</h3>
                        <div class="row mt-1">
                            <div class="col-md-12">
                                <div class="card bg-white" style="margin-top: 0px !important;padding:0">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ trans('sentence.business.product.label.productDetails') }}</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.business.product.label.category') }}</label>
                                                    <select name="category_id" id="category_id" class="form-control" required>
                                                        <option value="">{{ trans('sentence.business.product.label.selectOne') }}</option>
                                                        @foreach ($categories as $item)
                                                            <option value="{{$item->category_id}}" {{$category_id == $item->category_id ? "selected" : ""}}>{{$item->spanish_translation}}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" class="form-control" value="{{ $product_detail->category_name }}"> --}}
                                                </div>
                                                {{-- <p></p> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">{{ trans('sentence.business.product.label.subCategory') }}</label>
                                                <select name="subcategory_id" required id="dyn_subcats" class="form-control" required>
                                                </select>
                                                {{-- <input type="text" class="form-control" value="{{ $product_detail->subcategory_name }}"> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">{{ trans('sentence.business.product.label.price') }}</label>
                                                <input type="number" required  name="product_price" required class="form-control" value="{{$product_price}}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">{{ trans('sentence.business.product.label.productBrand') }}</label>
                                                <input type="text"  required name="product_brand" required class="form-control" value="{{$product_brand}}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">{{ trans('sentence.business.product.label.name') }}</label>
                                                <input type="text"  required name="product_name" required class="form-control" value="{{$product_name}}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">{{ trans('sentence.business.product.label.quantity') }}</label>
                                                <input type="text" required name="product_quantity" class="form-control" value="{{$product_quantity}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card bg-white" style="margin-top: 0px !important;padding:0">
                                    <div class="card-body">
                                        <label for="">{{ trans('sentence.business.product.label.productDescription') }}</label>
                                        <textarea name="product_description" id="" cols="5" rows="5" class="form-control">{{$product_description}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card bg-white" style="margin-top: 0px !important;padding:0">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">{{ trans('sentence.business.product.label.productColors') }}</h4>
                                        <label for="">{{ trans('sentence.business.product.label.addColors') }}</label>

                                        <div id="dyn_colors">
                                            @foreach ($colors as $color)
                                                <div style="display: flex" class="mb-2" id="color_{{ $color->vendor_product_color_id }}">
                                                    <input type="text" class="form-control" name="colors[]" value="{{ $color->product_color }}">
                                                    <button type="button" style="background: red;border:none;outline:none" data-color="{{ $color->vendor_product_color_id }}" class="delete-color">{{ trans('sentence.business.product.button.remove') }}</button>

                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="btn btn-primary" id="addcolor" type="button">{{ trans('sentence.business.product.button.add') }}</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title">{{ trans('sentence.business.product.label.productSizes') }}</h4>
                                        <label for="">{{ trans('sentence.business.product.label.addSizes') }}</label>

                                        <div id="dyn_sizes">
                                            @foreach ($sizes as $size)
                                                <div style="display: flex" class="mb-2" id="size_{{ $size->vendor_product_size_id }}">
                                                    <input type="text" class="form-control" name="sizes[]" value="{{ $size->product_size }}">
                                                    <button type="button" data-url="{{route('shop.product.delete.color', [$id])}}" style="background: red;border:none;outline:none" data-size="{{ $size->vendor_product_size_id }}" class="delete-size" >{{ trans('sentence.business.product.button.remove') }}</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="btn btn-primary" id="addsize" type="button">{{ trans('sentence.business.product.button.add') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                @php
                                    $imageRow = 0;
                                @endphp
                        <div class="table-responsive">
                            <table id="images" class="table table-striped table-bordered table-hover">
                                <thead>
                                <th colspan="3">
                                    {{ trans('sentence.restaurant.menu.label.images') }}
                                </th>
                                <tr>
                                    <td class="text-left">{{ trans('sentence.restaurant.menu.label.image') }}</td>
                                    <td>{{ trans('sentence.restaurant.menu.label.uploadImage') }}</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($images))
                                    @foreach($images as $image)
                                        <tr id="image-row{{$imageRow}}">
                                            <td class=" text-left">
                                                <img style='height: 80px; width: 100px; border: 1px solid #000;' id="output_image{{$imageRow}}" src="{{$image['thumb']}}" alt="" title="" />

                                                <input type="hidden" name="images[{{ $imageRow}}][old_images]" value="{{$image['thumb']}}" id="input-image{{ $imageRow}}"/>
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <input type="file" name="images[{{ $imageRow}}][image]" class="form-control" accept="image/*" onchange="preview_image({{$imageRow}})">
                                            </td>
                                            <td class="text-left">
                                                <button type="button" data-url="{{route('shop.product.delete.image', [$id])}}" data-row="{{$imageRow}}" data-id="{{$image['id']}}" data-toggle="tooltip" title="Delete"  class="btn btn-danger delete">
                                                    <i class="fa fa-minus-circle"></i> {{ trans('sentence.business.product.button.remove') }}
                                                </button>
                                            </td>
                                        </tr>

                                        @php
                                            $imageRow++;
                                        @endphp
                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="1"></td>
                                    <td class="text-right"><button type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addProductImage"><i class="fa fa-plus-circle"></i>{{ trans('sentence.restaurant.menu.button.add') }}</button></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <br>
                        <div style="display: flex;justify-content: flex-end">
                            <button class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;{{ trans('sentence.restaurant.menu.button.save') }}</button>&nbsp;
                            <a href="{{$back}}" class="btn btn-primary rounded"><i class="fa fa-arrow-alt-circle-left"></i> {{ trans('sentence.restaurant.menu.link.back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>


    var myLabel                 = myLabel || {};
    myLabel.token               = '{{Session::token()}}'
    myLabel.childCategory       = '{{route('shop.product.fetch-subcategories')}}';

    myLabel.businessTypeParentCategory       = '{{ $category_id }}';
    myLabel.businessTypeChildCategory       = '{{ $subcategory_id }}';

    myLabel.selectOption       = '{{ trans('sentence.business.store.label.selectOption') }}';
    myLabel.removeText       = '{{ trans('sentence.business.product.button.remove') }}';
    myLabel.imageRow        = '{{$imageRow}}';
    myLabel.placeholder     = '{{$placeholder}}';


//================
function preview_image(ID)
{

     console.log(ID);
 var reader = new FileReader();
 reader.onload = function()
 {

     console.log(ID);
  var output = document.getElementById('output_image'+ID);
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

</script>

@endsection







