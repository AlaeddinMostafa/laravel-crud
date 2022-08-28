@extends('admin.layouts.app')
@section('title','View more blog post')
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9  me-auto ms-auto my-2">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#"><img class="card-img-top" src="{{ asset('/gallery/blog/').'/'.$blog->image }}" alt="{{ $blog->title }}"></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $blog->created_at }}</div>
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <div class="cart-text">
                            {!! $blog->editor !!}
                        </div>
                        @switch($blog->status)
                            @case(0)
                                @php $status = 'deActive';  @endphp
                            @break
                            @case(1)
                            @php $status = 'Active';  @endphp
                            @break
                        @endswitch
                        <a class="btn" href="javascript:void(0)" disabled="true">status :  {{ $status}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
