@extends("admin.admin_app")

@section("content")
    <div id="main">
        <div class="page-header">

            <h2>Appointments Data</h2>

        </div>

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        <div class="panel panel-default panel-shadow">
            <div class="panel-body">

                <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Applicant Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="text-center width-100">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($details as $i => $key)
                        <tr>

                            <td><a href="{{ url('admin/details/'.$key->id) }}">{{$i+1}}</a></td>

                            <td>
                                <a href="{{ url('admin/details/'.$key->id) }}">{{$key->name_of_applicant}}</a>
                            </td>

                            <td>
                                {{$key->email}}
                            </td>

                            <td>
                                {{$key->applicant_phone}}
                            </td>

                            <td>
                                {{$key->address}}
                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="{{ url('admin/details/'.$key->id) }}"><i class="md md-open-in-new"></i> View</a></li>
                                    </ul>
                                </div>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>



@endsection
