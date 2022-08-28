@extends('admin.layouts.app')
@section('title','about - create')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 border border-dark p-3 me-auto ms-auto my-3 shadow rounded">
                <form action="{{ route('about.update',$about->id) }}" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class=" my-2">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title"
                               class="form-control form-control-sm @error('title') is-invalid @enderror"
                               value="{{ $about->title }}">
                    </div>

                    <div class="my-3 row">
                        <div class="col-md-4">

                            <label for="email">email</label>
                            <input type="text" name="email" id="email"
                                   class="form-control-sm form-control @error('email')  is-invalid @enderror"
                                   value="{{ $about->email }}">
                        </div>
                        <div class="col-md-4">

                            <label for="phone">phone</label>
                            <input type="text" name="phone" id="phone"
                                   class="form-control-sm form-control @error('phone')  is-invalid @enderror"
                                   value="{{ $about->phone }}">
                        </div>
                        <div class="col-md-4">

                            <label for="telegram">telegram</label>
                            <input type="text" name="telegram" id="telegram"
                                   class="form-control-sm form-control @error('telegram')  is-invalid @enderror"
                                   value="{{ $about->telegram }}">
                        </div>
                    </div>

                    <div class="my-3">
                        <label for="editor">Description</label>
                        <textarea name="description" id="editor" cols="30" rows="10" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ $about->description }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="inputGroupFile01">banner</label>
                                <input type="file" class="form-control" id="inputGroupFile01" name="banner" value="{{ $about->banner }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-2">
                                <label for="inputGroupFile02">image</label>
                                <input type="file" class="form-control" id="inputGroupFile02" name="image" value="{{ $about->image }}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-md btn-dark">Create about page</button>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
