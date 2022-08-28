@extends('admin.layouts.app')
@section('title','Edit blog post')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 me-auto ms-auto mt-md-4  border border-dark p-4 rounded shadow">
                <form action="{{ route('blog.update',$blog->id) }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                               class="form-control form-control-sm @error('title') is-invalid @enderror"
                               value="{{ $blog->title }}">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="editor">Description</label>
                        <textarea name="editor" id="editor" cols="30" rows="10" class="form-control form-control-sm @error('editor') is-invalid @enderror">
                            {{ $blog->editor }}
                        </textarea>
                        @error('editor')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="image_blog" class="form-label">Image for blog post</label>
                        <input class="form-control form-control-sm @error('image') is-invalid @enderror" id="image_blog" type="file" name="image">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-select form-select-sm @error('status') is-invalid @enderror">
                            <option selected disabled>Select a status to publish the post</option>
                            <option value="0" @if($blog->status === 0) selected @endif>deActive</option>
                            <option value="1" @if($blog->status === 1) selected @endif>Active</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="my-2">
                        <button class="btn btn-md btn-dark" type="submit">Edit the selected post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
