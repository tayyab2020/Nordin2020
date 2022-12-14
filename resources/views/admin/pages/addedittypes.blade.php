@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h2> {{ isset($type->types) ? 'Edit: '. $type->types : 'Add Type' }}</h2>

		<a href="{{ URL::to('admin/types') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

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
                {!! Form::open(array('url' => array('admin/types/addtypes'),'class'=>'form-horizontal padding-15','name'=>'type_form','id'=>'type_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                <input type="hidden" name="id" value="{{ isset($type->id) ? $type->id : null }}">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Property Type</label>
                      <div class="col-sm-9">
                        <input type="text" name="property_type" value="{{ isset($type->types) ? $type->types : null }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Slug</label>
                    <div class="col-sm-9">
                        <input type="text" name="slug" value="{{ isset($type->slug) ? $type->slug : null }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Show in Home Exchange</label>
                    <div class="col-sm-9">

                        <div style="display: flex;align-items: center;">

                            <label for="show_home" style="cursor: pointer;display: flex;flex-direction: row;align-items: center;">
                                <input id="show_home" style="width: 13px;box-shadow: none;" type="radio" name="show_type" class="form-control" @if(isset($type->show_type)) @if($type->show_type == 1) checked @endif @endif value="1">
                                <span style="margin-left: 5px;">Show only in Home Exchange</span>
                            </label>

                            <label for="show_everywhere" style="cursor: pointer;display: flex;flex-direction: row;align-items: center;margin-left: 20px;">
                                <input id="show_everywhere" style="width: 13px;box-shadow: none;" type="radio" name="show_type" class="form-control" @if(isset($type->show_type)) @if($type->show_type == 2) checked @endif @endif value="2">
                                <span style="margin-left: 5px;">Show everywhere</span>
                            </label>

                            <label for="dont_show" style="cursor: pointer;display: flex;flex-direction: row;align-items: center;margin-left: 20px;">
                                <input id="dont_show" style="width: 13px;box-shadow: none;" type="radio" name="show_type" class="form-control" @if(isset($type->show_type)) @if($type->show_type == 3) checked @endif @else checked @endif value="3">
                                <span style="margin-left: 5px;">Dont show in home exchange</span>
                            </label>

                        </div>

                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary">{{ isset($type->id) ? 'Edit Type ' : 'Add Type' }}</button>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>


</div>

@endsection
