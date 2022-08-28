@extends('admin.layouts.app')
@section('title','contact')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
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
                            <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                        </div>
                        <div class="dataTable-container">
                            <table id="datatablesSimple" class="dataTable-table">
                                <thead>
                                <tr>
                                    <th data-sortable="" style="width: 2%;"><a href="#" class="dataTable-sorter">surname</a></th>
                                    <th data-sortable="" style="width: 5%;"><a href="#" class="dataTable-sorter">email</a></th>
                                    <th data-sortable="" style="width: 15%;"><a href="#" class="dataTable-sorter">subject</a></th>
                                    <th data-sortable="" style="width: 50.16598%;"><a href="#" class="dataTable-sorter">description</a></th>
                                    <th data-sortable="" style="width: 15%;"><a href="#" class="dataTable-sorter">created_at</a></th>
                                    <th data-sortable="" style="width: 11%;"><a href="#" class="dataTable-sorter">delete</a></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                    <td>{{ $contact->surname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>
                                        <p>{{ $contact->description }}</p>
                                    </td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>
                                        <form action="{{ route('contact.delete',$contact->id )}}" method="post">
                                            @csrf
                                            <button class="btn btn-md btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
