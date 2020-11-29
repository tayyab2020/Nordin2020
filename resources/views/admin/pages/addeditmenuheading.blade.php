@extends("admin.admin_app")

@section("content")

    <div id="main">
        <div class="page-header">

            <h2> {{ isset($menu->title) ? 'Edit: '. $menu->title : 'Add Menu Heading' }}</h2>

            <a href="{{ URL::to('admin/menus') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Menus</a>

        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-body">

                {!! Form::open(array('url' => array('admin/menu/add'),'class'=>'form-horizontal padding-15','role'=>'form','enctype' => 'multipart/form-data')) !!}

                <input type="hidden" name="id" value="{{ isset($menu->id) ? $menu->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" value="{{ isset($menu->title) ? $menu->title : old('title') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Order</label>
                    <div class="col-sm-9">
                        <input type="number" name="order_menu" value="{{ isset($menu->order_menu) ? $menu->order_menu : old('order_menu') }}" class="form-control">
                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">

                        <button type="submit" class="btn btn-primary">{{ isset($menu->title) ? 'Edit' : 'Add' }}</button>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
