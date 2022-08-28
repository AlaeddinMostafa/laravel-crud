@extends('admin.layouts.app')
@section('title','about')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 my-2 ms-auto me-auto">
                <a href="{{ route('about.create') }}" class="btn btn-md btn-dark">Create Page</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 my-3 me-auto ms-auto">
                <table class="table table-bordered table-hover table-responsive-lg">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">#</th>
                        <th scope="col" style="width: 10%;">title</th>
                        <th scope="col" style="width: 20%">banner</th>
                        <th scope="col" style="width: 20%">image</th>
                        <th scope="col" style="width: 40%">description</th>
                        <th scope="col" style="width: 40%">option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                    <tr>
                        <th scope="row">{{ $about->id }}</th>
                        <td>{{ $about->title }}</td>
                        <td><img src="{{ asset('/gallery/about').'/'.$about->banner }}" alt="" width="100" height="100"></td>
                        <td><img src="{{ asset('/gallery/about').'/'.$about->image }}" alt="" width="100" height="100"></td>
                        <td>{{ $about->description }}</td>
                        <td>
                            <a href="{{ route('about.edit',$about->id) }}" class="btn btn-md btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
