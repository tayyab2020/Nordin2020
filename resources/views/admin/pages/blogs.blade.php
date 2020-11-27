@extends("admin.admin_app")

@section("content")
    <div id="main">
        <div class="page-header">

            @if(Route::currentRouteName() == 'bewindvoering-admin')

                <div class="pull-right">
                    <a href="{{URL::to('admin/bewindvoering/add')}}" class="btn btn-primary">Add Bewindvoering <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
                </div>

                <h2>Bewindvoering</h2>

            @elseif(Route::currentRouteName() == 'mentorschap-admin')

                <div class="pull-right">
                    <a href="{{URL::to('admin/mentorschap/add')}}" class="btn btn-primary">Add Mentorschap <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
                </div>

                <h2>Mentorschap</h2>

            @elseif(Route::currentRouteName() == 'curatele-admin')

                <div class="pull-right">
                    <a href="{{URL::to('admin/curatele/add')}}" class="btn btn-primary">Add Curatele <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
                </div>

                <h2>Curatele</h2>

            @else

                <div class="pull-right">
                    <a href="{{URL::to('admin/tarieven/add')}}" class="btn btn-primary">Add Tarieven <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
                </div>

                <h2>Tarieven</h2>

            @endif

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
                        <th>Image</th>
                        <th>Title</th>

                        <th class="text-center width-100">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($allblogs as $i => $blog)
                        <tr>
                            <td>

                                    @if($blog->image)

                                        <img src="{{ URL::asset('upload/blogs/'.$blog->image) }}" width="80" alt="">

                                    @else

                                        <img src="{{ URL::asset('upload/noImage.png') }}" width="80" alt="">

                                    @endif

                            </td>

                            <td>

                                {{ $blog->title }}

                            </td>


                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">

                                        @if(Route::currentRouteName() == 'bewindvoering-admin')

                                            <li><a href="{{ url('admin/bewindvoering/add/'.$blog->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                            <li><a href="{{ url('admin/bewindvoering/delete/'.$blog->id) }}"><i class="md md-delete"></i> Delete</a></li>

                                        @elseif(Route::currentRouteName() == 'mentorschap-admin')

                                            <li><a href="{{ url('admin/mentorschap/add/'.$blog->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                            <li><a href="{{ url('admin/mentorschap/delete/'.$blog->id) }}"><i class="md md-delete"></i> Delete</a></li>

                                        @elseif(Route::currentRouteName() == 'curatele-admin')

                                            <li><a href="{{ url('admin/curatele/add/'.$blog->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                            <li><a href="{{ url('admin/curatele/delete/'.$blog->id) }}"><i class="md md-delete"></i> Delete</a></li>

                                        @else

                                            <li><a href="{{ url('admin/tarieven/add/'.$blog->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                            <li><a href="{{ url('admin/tarieven/delete/'.$blog->id) }}"><i class="md md-delete"></i> Delete</a></li>

                                        @endif

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
