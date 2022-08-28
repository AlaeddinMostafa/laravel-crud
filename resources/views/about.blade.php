@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/about.css') }}">
@endsection
@section('content')
<div class="container-fluid p-0 overflow-hidden">
        <div class="row">
            <div class="col-lg-12 background-image">
                <h4>About Us</h4>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4">
                <img src="https://picsum.photos/400" alt="" class="shadow-custom rounded-pill">
            </div>
            <div class="col-lg-8" id="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur cupiditate dolorum expedita, facilis incidunt iure iusto libero magnam magni officiis provident, quam qui repudiandae tempora unde vel voluptates voluptatum.
                </p>
            </div>
            <div class="container">
                <div class="row">
                   <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="container-fluid mt-4">
                            <div class="row">
                                <div class="col-lg-3 box-shadow-custom text-center">
                                    <a href="mailto:email@gmail.com" class="text-dark">Email@gmail.com</a>
                                </div>
                                <div class="col-lg-3 box-shadow-custom text-center">
                                    <a href="tel:09198983834" class="text-dark">09198382834</a>
                                </div>
                                <div class="col-lg-3 box-shadow-custom text-center">
                                    <a href="#telegram" class="text-dark">telegram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection