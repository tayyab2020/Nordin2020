@extends("admin.admin_app")

@section("content")
    <div id="main">
        <div class="page-header">

            <div class="pull-right">
                <a href="{{URL::to('admin/menu/add')}}" class="btn btn-success">Add Menu Heading <i style="margin-left: 5px;position: relative;top: 1px;" class="fa fa-plus"></i></a>
            </div>

            <h2>Menu Headings</h2>

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
                        <th>Title</th>
                        <th>Order</th>

                        <th class="text-center width-100">Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($menus as $i => $menu)
                        <tr>

                            <td>

                                <a target="_blank" href="">{{ $menu->title }}</a>

                            </td>

                            <td>
                                {{$menu->order_menu}}
                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Actions <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">

                                        <li><a href="{{ url('admin/menu/add/'.$menu->id) }}"><i class="md md-edit"></i> Edit Editor</a></li>
                                        <li><a style="cursor: pointer;" class="delete-btn" data-url="{{ url('admin/menu/delete/'.$menu->id) }}"><i class="md md-delete"></i> Delete</a></li>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">

    <script>
        $(document).ready(function(){

            $(".delete-btn").click(function() {

                Swal.fire({
                    title: "Are you sure?",
                    text: "Your Blogs linked to this menu will also be deleted!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.value) {

                        window.location.href = $(this).data('url');

                    }
                })
            });


        });
    </script>


@endsection
