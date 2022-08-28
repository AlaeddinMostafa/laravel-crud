@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/contact.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-9 my-5 shadow p-4 box-shadow-custom">
                <form action="{{ route('contact.store') }}" method="post" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">surname</label>
                            <input type="text" name="surname" id="name"
                                   class="form-control bg-transparent border-dark @error('surname') is-invalid @enderror">
                            @error('surname')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="email">email</label>
                            <input type="text" name="email" id="email"
                                   class="form-control bg-transparent border-dark @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="subject">subject</label>
                            <input type="text" name="subject" id="subject"
                                   class="form-control bg-transparent border-dark @error('subject') is-invalid @enderror">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <label for="description">description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                      class="form-control bg-transparent border-dark @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-md btn-outline-dark border-3 my-3">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
