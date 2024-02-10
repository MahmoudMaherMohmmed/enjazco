@extends('dashboard.layouts.master')

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('sliders.actions.show') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <tbody>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.id') }}</th>
                                    <td>{{$slider->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.title') }}</th>
                                    <td>{{$slider->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.description') }}</th>
                                    <td>{{$slider->getTranslation('description', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.status') }}</th>
                                    <td> <span class="badge {{$slider->status->color()}}">{{$slider->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.created_at') }}</th>
                                    <td>{{$slider->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('sliders.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$slider->getImage()}}"> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
@endsection

@section('js') @endsection