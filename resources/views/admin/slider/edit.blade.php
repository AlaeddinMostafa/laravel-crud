@extends('admin.layouts.app')
@section('title','Register a new image for the slider')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 me-auto ms-auto mt-md-4  border border-dark p-4 rounded shadow">
            <form action="{{ route('slider.update',$slider->id) }}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- title --}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control form-control-sm @error('title') is-invalid @enderror"
                        value="{{ $slider->title }}">
                    @error('title')
                    <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                {{--status--}}
                <div class="form-group mt-md-2">
                    <label for="status">Status</label>
                    <select
                        name="status"
                        id="status"
                        class="form-select form-select-sm @error('status') is-invalid @enderror">
                        <option selected disabled>please select status for this image</option>
                        <option value="1" class="text-success" @if($slider->status === 1) selected @endif>Active</option>
                        <option value="0" class="text-warning" @if($slider->status === 0) selected @endif>deActive</option>
                    </select>
                    @error('status')
                    <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                {{--image--}}
                <div class="mt-3 mb-3">
                    <label for="formFileSm" class="form-label">select image for slider</label>
                    <input class="form-control form-control-sm @error('image') is-invalid @enderror" id="formFileSm" type="file" name="image">
                    @error('image')
                    <span class="text-warning">{{ $message }}</span>
                    @enderror
                </div>

                {{--button--}}
                <button class="btn btn-md btn-dark" type="submit" name="submit">update</button>

            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection
