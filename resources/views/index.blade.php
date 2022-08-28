@extends('layouts.app')
@section('content')
<!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <img src="{{ asset('/gallery/slider/').'/'.$slider->image }}" alt="{{ $slider->title }}">
            </div>
            @endforeach
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <div class="container my-2">
        <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-3" >
                        <div class="card  shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('/gallery/blog/').'/'.$blog->image }}" alt="{{ $blog->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{!! \Illuminate\Support\Str::substr($blog->editor,0,1200)  !!} </p> </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
