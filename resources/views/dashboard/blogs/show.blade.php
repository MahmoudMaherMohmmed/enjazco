@extends('dashboard.layouts.master')

@section('css') @endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ __('dashboard.application') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('blogs.actions.show') }}</span>
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
                                    <th scope="row">{{ __('blogs.attributes.id') }}</th>
                                    <td>{{$blog->id}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('blogs.attributes.title') }}</th>
                                    <td>{{$blog->getTranslation('title', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('blogs.attributes.description') }}</th>
                                    <td>{{$blog->getTranslation('description', app()->getLocale())}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('blogs.attributes.status') }}</th>
                                    <td> <span class="badge {{$blog->status->color()}}">{{$blog->status->trans()}}</span> </td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('blogs.attributes.created_at') }}</th>
                                    <td>{{$blog->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{ __('blogs.attributes.image') }}</th>
                                    <td> <img class="brround" height="200px" width="200px" src="{{$blog->getImage()}}"> </td>
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