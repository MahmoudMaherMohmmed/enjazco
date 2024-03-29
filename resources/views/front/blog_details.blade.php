@extends('front.layouts.master')

@section('title') {{$blog->title}} @endsection

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{URL::asset('front/assets')}}/images/corporate/pages.jpg') top;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <div class="pages-heading">
                            <h2 class="text-white title-dark"> {{$blog->title}} </h2>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 date text-white-50"><i class="mdi mdi-calendar-check"></i> {{$blog->created_at->format('d M Y')}}</li>
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->


            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">{{__('website.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('blogs')}}">{{__('website.blogs')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->

    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="me-lg-5">
                        <img src="{{$blog->getImage()}}" class="img-fluid rounded-md shadow" alt="{{$blog->title}}">
                        <ul class="list-unstyled d-flex justify-content-between mt-4">
                            <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> {{$blog->created_at->format('d M Y')}}</li>
                        </ul>

                        <p class="text-muted">{!! $blog->description !!}</p>
                    </div>
                </div><!--end col-->
                <!-- BLog End -->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- RECENT POST -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">{{__('website.recent_post')}}</h5>
                                <div class="mt-4">
                                    @foreach($blogs as $blog)
                                    <div class="d-flex align-items-center">
                                        <img src="{{$blog->getImage()}}" class="avatar avatar-small rounded" style="width: auto;" alt="{{$blog->title}}">
                                        <div class="flex-1 ms-3">
                                            <a href="{{route('blog.details', $blog->slug)}}" class="d-block title text-dark">{{$blog->title}}</a>
                                            <span class="text-muted">{{$blog->created_at->format('d M Y')}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- RECENT POST -->
                        </div>
                    </div>
                </div><!--end col-->
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
