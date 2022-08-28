@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/about.css') }}">
@endsection
@section('content')
    @foreach($abouts as $about)
        <div class="container-fluid p-0 overflow-hidden">
            <div class="row">
                <div class="col-lg-12 background-image" style="background-image: url('{{ asset('/gallery/about/').'/'.$about->banner }}') ">
                    <h4>{{ $about->title }}</h4>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('/gallery/about/').'/'.$about->image }}" alt="{{ $about->title }}" class="shadow-custom rounded-pill" width="400" height="400">
                </div>
                <div class="col-lg-8" id="content">
                    {!! $about->description !!}
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-lg-3 box-shadow-custom text-center">
                                        <a href="mailto: {{ $about->email }}" class="text-dark">{{ $about->email }}</a>
                                    </div>
                                    <div class="col-lg-3 box-shadow-custom text-center">
                                        <a href="tel:{{ $about->phone }}" class="text-dark">{{ $about->phone }}</a>
                                    </div>
                                    <div class="col-lg-3 box-shadow-custom text-center">
                                        <a href="{{ $about->telegram }}" class="text-dark">Telegram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('js')
@endsection
