@extends('layouts.seller')
@section('content')



    <div class="col-md-10 col-sm-12">
        <div class="">
            <div class="col-md-12 col-sm-12 bg-white main-shadwo">
                <div class="row bg-header border-bottom">
                    <div class="col-md-12 col-sm-12">
                        <div class="navbar-nav my-4 margin-25">
                            <div class="h3">{{ trans('sentence.business.order.label.manageOrders') }}</div>

                        </div>
                    </div>
                </div>

                <div class="enter-conta">
                    <div class="row justify-content-center">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="takfua-back">
                                        <th class="text-center">#</th>
                                        <th>{{ trans('sentence.business.order.columns.no') }}</th>
                                        <th>{{ trans('sentence.business.order.columns.client') }}</th>
                                        <th>{{ trans('sentence.business.order.columns.product') }}</th>
                                        <th>{{ trans('sentence.business.order.columns.order') }}</th>
                                        <th>{{ trans('sentence.business.order.columns.date') }}</th>
                                        <th>{{ trans('sentence.business.order.columns.status') }}</th>
                                        <th class="text-right">{{ trans('sentence.business.order.columns.price') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" scope="5">{{ trans('sentence.business.order.columns.empty') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
