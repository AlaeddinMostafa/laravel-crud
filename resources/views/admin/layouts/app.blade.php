<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Admin - @section('title')@show</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@4.0.10/css/froala_editor.pkgd.min.css' rel='stylesheet'
          type='text/css'/>
    <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/froala-editor@4.0.10/js/froala_editor.pkgd.min.js'></script>

    <link href="{{ asset('/admin/css/styles.css') }}" rel="stylesheet"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="sb-nav-fixed">
@include('admin/layouts/header')
@include('message.message')
<div id="layoutSidenav">
    @include('admin/layouts/layoutSidenav_nav')
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('/admin/js/scripts.js') }}"></script>
<script src="{{ asset('/admin/assets/demo/chart-area-demo.js') }}"></script>
{{-- <script src="{{ asset('/admin/assets/demo/chart-bar-demo.js') }}"></script>--}}
{{-- <script src="{{ asset('/admin/js/datatables-simple-demo.js') }}"></script> --}}
@yield('js')
<script>
    const editor = new FroalaEditor('#editor', {
        charCounterCount: true,
        imageManagerDeleteMethod: 'DELETE'
    });
</script>
</body>
</html>
