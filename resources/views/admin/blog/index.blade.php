@extends('admin.layouts.app')
@section('title','blog')
@section('css')
@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 my-4">
                <a href="{{ route('blog.create') }}" class="btn btn-md btn-success">Create New Post</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false" data-prefix="fas"
                             data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                             data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288 416H448V320H288V416zM448 256V160H288V256H448z"></path>
                        </svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page</label></div>
                                <div class="dataTable-search">
                                    <input class="dataTable-input" placeholder="Search..." type="text">
                                </div>
                            </div>
                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr>
                                        <th data-sortable="" style="width: 2%;"><a href="#"  class="dataTable-sorter">#</a></th>
                                        <th data-sortable="" style="width: 28%;"><a href="#" class="dataTable-sorter">title</a></th>
                                        <th data-sortable="" style="width: 40%;"><a href="#" class="dataTable-sorter">editor</a></th>
                                        <th data-sortable="" style="width: 10%;"><a href="#" class="dataTable-sorter">image</a></th>
                                        <th data-sortable="" style="width: 3%;"><a href="#" class="dataTable-sorter">option</a></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr class="text-center">
                                            <td class="py-5">{{ $blog->id }}</td>
                                            <td class="py-5">{{ $blog->title }}</td>
                                            <td class="text-start">{{ \Illuminate\Support\Str::substr( $blog->editor,0,400) }}</td>
                                            <td class="py-5"><img src="{{ asset('/gallery/blog/').'/'.$blog->image }}" alt="{{ $blog->title }}" width="100" height="100"></td>
                                            <td class="btn-group py-5">
                                                <a href="{{ route('blog.show',$blog->id) }}" class="btn btn-md btn-success">show</a>
                                                <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-md btn-primary">edit</a>
                                                <form action="{{ route('blog.delete',$blog->id) }}" method="post" role="form">
                                                    @csrf
                                                    <button class="btn btn-md btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                {{ $blogs->links('vendor.pagination.bootstrap-5') }}
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
