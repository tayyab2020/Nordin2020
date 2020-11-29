@extends("admin.admin_app")

@section("content")
    <div id="main">
        <div class="page-header">

            <div class="pull-right" style="margin-left: 10px;">
                <a href="{{URL::to('admin/menu/add')}}" class="btn btn-success">Add Menu Heading <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
            </div>

            <div class="pull-right">
                <a href="{{URL::to('admin/blogs/addblog')}}" class="btn btn-primary">Create Blog <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
            </div>

            <h2>Blogs</h2>

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
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Button Title</th>
                        <th>Menu Heading</th>
                        <th>Homepage Visible</th>
                        <th>Blog Order</th>
                        <th>Link</th>

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

                                        ?

                                    @endif
                            </td>


                            <td>
                                @if($blog->icon)

                                    <img src="{{ URL::asset('upload/blogs/icons/'.$blog->icon) }}" width="30" alt="">

                                @else

                                    ?

                                @endif
                            </td>

                            <td>

                                <a target="_blank" href="{{ url('blogs/'.$blog->slug) }}">{{ $blog->title }}</a>

                            </td>

                            <td>
                                {{$blog->button_title}}
                            </td>

                            <td>
                                {{$blog->menu_title}}
                            </td>

                            <td>
                                @if($blog->visible)
                                    Yes
                                @else
                                    No
                                @endif
                            </td>

                            <td>
                                {{$blog->order_blog}}
                            </td>

                            <td>

                                <a target="_blank" href="{{ $blog->link }}">{{ $blog->link }}</a>

                            </td>


                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">

                                        <li><a href="{{ url('admin/blogs/addblog/'.$blog->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                        <li><a href="{{ url('admin/blogs/delete/'.$blog->id) }}"><i class="md md-delete"></i> Delete</a></li>

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
