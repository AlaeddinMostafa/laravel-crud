@extends('admin.layouts.app')
@section('title','dashboard')
@section('content')

    <div class="container-fluid px-4">
        <h4 class="mt-4">Dashboard</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="#!" class="nav-link">Dashboard</a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                                <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                                                     type="text"></div>
                            </div>
                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr>
                                        <th data-sortable="" style="width: 19.6094%;"><a href="#"
                                                                                         class="dataTable-sorter">Name</a>
                                        </th>
                                        <th data-sortable="" style="width: 28.9666%;"><a href="#"
                                                                                         class="dataTable-sorter">email</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.6225%;"><a href="#"
                                                                                         class="dataTable-sorter">email_verified_at</a>
                                        </th>
                                        <th data-sortable="" style="width: 9.19447%;"><a href="#"
                                                                                         class="dataTable-sorter">remember_token</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.2156%;"><a href="#"
                                                                                         class="dataTable-sorter">created_at</a>
                                        </th>
                                        <th data-sortable="" style="width: 11.3914%;"><a href="#"
                                                                                         class="dataTable-sorter">updated_at</a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    {{-- record users table --}}
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->email_verified_at)
                                                    <span class="text-success">{{ __('verified') }}</span>
                                                @else
                                                    <span class="text-warning">{{ __('not verified') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->remember_token)
                                                    <span class="text-success">{{ __('verified') }}</span>
                                                @else
                                                    <span class="text-warning">{{ __('not verified') }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                                            <td>{{ $user->updated_at->format('Y-m-d H:i') }}</td>
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
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-chart-area me-1" aria-hidden="true" focusable="false"
                             data-prefix="fas" data-icon="chart-area" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M64 400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32C49.67 32 64 46.33 64 64V400zM128 320V236C128 228.3 130.8 220.8 135.9 214.1L215.3 124.2C228.3 109.4 251.4 109.7 263.1 124.8L303.2 171.8C312.2 182.7 328.6 183.4 338.6 173.4L359.6 152.4C372.7 139.3 394.4 140.1 406.5 154.2L472.3 231C477.3 236.8 480 244.2 480 251.8V320C480 337.7 465.7 352 448 352H159.1C142.3 352 127.1 337.7 127.1 320L128 320z"></path>
                        </svg><!-- <i class="fas fa-chart-area me-1"></i> Font Awesome fontawesome.com -->
                        Area Chart Example
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="myAreaChart" style="display: block; height: 234px; width: 586px;"
                                class="chartjs-render-monitor" width="732" height="292"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';

        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line'
            , data: {
                labels: ["users", "email_verified_at", "remember_token"]
                , datasets: [{
                    label: "Sessions"
                    , lineTension: 0.3
                    , backgroundColor: "rgba(2,117,216,0.2)"
                    , borderColor: "rgba(2,117,216,1)"
                    , pointRadius: 5
                    , pointBackgroundColor: "rgba(2,117,216,1)"
                    , pointBorderColor: "rgba(255,255,255,0.8)"
                    , pointHoverRadius: 5
                    , pointHoverBackgroundColor: "rgba(2,117,216,1)"
                    , pointHitRadius: 50
                    , pointBorderWidth: 2
                    , data: [{{ $countUsers }}, {{$email_verified_at}}, {{$remember_token}}]
                    ,
                }]
                ,
            }
            , options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        }
                        , gridLines: {
                            display: false
                        }
                        , ticks: {
                            maxTicksLimit: 7
                        }
                    }]
                    , yAxes: [{
                        ticks: {
                            min: 0
                            , max: {{ $countUsers }}
                            , maxTicksLimit: 3
                        }
                        , gridLines: {
                            color: "rgba(0, 0, 0, .125)"
                            ,
                        }
                    }]
                    ,
                }
                , legend: {
                    display: false
                }
            }
        });

    </script>
@endsection
