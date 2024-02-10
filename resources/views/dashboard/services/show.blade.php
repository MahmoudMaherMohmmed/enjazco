@extends('dashboard.layouts.master')

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('services.actions.show') }}</span>
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
                                    <th scope="row">{{ __('services.attributes.id') }}</th>
                                    <td>{{$service->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.title') }}</th>
                                    <td>{{$service->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.short_description') }}</th>
                                    <td>{{$service->getTranslation('short_description', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.description') }}</th>
                                    <td>{{$service->getTranslation('description', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.status') }}</th>
                                    <td> <span class="badge {{$service->status->color()}}">{{$service->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.created_at') }}</th>
                                    <td>{{$service->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.icon') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$service->getIcon()}}"> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('services.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$service->getImage()}}"> </td>
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