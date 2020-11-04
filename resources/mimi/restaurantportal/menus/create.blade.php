@extends('restaurantportal.layouts.master')
@section('content')

    <div class="col-md-10 col-sm-12">
        <form id="frmDish" class="frmDish" action="{{route('dish.store')}}" method="post" enctype="multipart/form-data">
        <div class="">
            <div class="col-md-12 col-sm-12 bg-white main-shadwo">
                <div class="row bg-header border-bottom">
                    <div class="col-md-12 col-sm-12">
                        <div class="navbar-nav my-4 margin-25">
                            <div class="h3">{{ trans('sentence.restaurant.menu.label.title') }}</div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card bg-white" style="margin-top: 0px !important;padding:0">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ trans('sentence.restaurant.menu.label.dishDetails') }}</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.restaurant.menu.entry.name') }}<span class="text-danger">*</span></label>
                                                    <input type="text" required name="name" class="form-control" value="{{$name}}" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.restaurant.menu.entry.Category (Drinks /Starter /Main courses /Desserts)') }}<span class="text-danger">*</span></label>
                                                    <input type="text" name="type" class="form-control" value="{{$type}}" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.restaurant.menu.entry.size') }}</label>
                                                    <input type="text" name="size" class="form-control" value="{{$size}}" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.restaurant.menu.entry.price') }}<span class="text-danger">*</span></label>
                                                    <input type="text" name="price" class="form-control" value="{{$price}}" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">{{ trans('sentence.restaurant.menu.entry.description') }}<span class="text-danger">*</span></label>
                                                    <textarea name="description" cols="5" rows="5" class="form-control" required>{{$description}}</textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>


                        <div class="table-responsive">
                            <table id="images" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <th colspan="3">
                                    {{ trans('sentence.restaurant.menu.label.images') }}
                                </th>

                                    <tr>
                                        <th class=" d-none d-lg-table-cell text-left">{{ trans('sentence.restaurant.menu.label.image') }}</th>
                                        <th>{{ trans('sentence.restaurant.menu.label.uploadImage') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $imageRow = 0;
                                    @endphp
                                    @if(count($images))
                                        @foreach($images as $image)
                                            <tr id="image-row{{$imageRow}}">
                                                <td class="d-none d-lg-table-cell text-left">
                                                    
                                                    <img id="output_image{{$imageRow}}" src="{{$image['thumb']}}" style='height: 80px; width: 100px; border: 1px solid #000;' alt="" title="" data-placeholder="{{$placeholder}}>"/>
                                                    <input type="hidden" name="images[{{ $imageRow}}][old_images]" value="{{$image['thumb']}}" id="input-image{{ $imageRow}}"/>
                                                </td>
                                                <td>
                                                    <input type="file" name="images[{{ $imageRow}}][image]" class="form-control" onchange="preview_image({{$imageRow}})">
                                                </td>
                                                <td class="text-left"><button type="button" data-url="{{route('dish.delete.image', [$id])}}" data-row="{{$imageRow}}" data-id="{{$image['id']}}" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
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
                                    <td class="text-left"><button type="button" data-toggle="tooltip" title="Add" class="btn btn-primary addImage"><i class="fa fa-plus-circle"></i></button></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        @csrf
                            <br>
                        <div style="display: flex;justify-content: flex-end">
                            <button class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;{{ trans('sentence.restaurant.menu.button.save') }}</button>&nbsp;
                            <a href="{{$back}}" class="btn btn-primary rounded"><i class="fa fa-arrow-alt-circle-left"></i> {{ trans('sentence.restaurant.menu.link.back') }}</a>
                        </div>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection
<script type='text/javascript'>
    var myLabel             = myLabel || {};
    myLabel.imageRow        = '<?php echo $imageRow;?>';
    myLabel.placeholder     = '<?php echo $placeholder;?>';

    $(document).ready(function() {
        $('#contact-detail').dataTable({
            "responsive": true,
            "columnDefs": [
                        { responsivePriority: 1, targets: 0 },
                        { responsivePriority: 2, targets: 4 }
                    ]
        } );
    } );

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });

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
