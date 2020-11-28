@extends("admin.admin_app")

@section("content")

    <div id="main">
        <div class="page-header">

            @if(Route::currentRouteName() == 'add-bewindvoering' || Route::currentRouteName() == 'edit-bewindvoering')

                <h2> {{ isset($blog->title) ? 'Edit: '. $blog->title : 'Add Bewindvoering' }}</h2>

                <a href="{{ URL::to('admin/bewindvoering') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

            @elseif(Route::currentRouteName() == 'add-mentorschap' || Route::currentRouteName() == 'edit-mentorschap')

                <h2> {{ isset($blog->title) ? 'Edit: '. $blog->title : 'Add Mentorschap' }}</h2>

                <a href="{{ URL::to('admin/mentorschap') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

            @elseif(Route::currentRouteName() == 'add-curatele' || Route::currentRouteName() == 'edit-curatele')

                <h2> {{ isset($blog->title) ? 'Edit: '. $blog->title : 'Add Curatele' }}</h2>

                <a href="{{ URL::to('admin/curatele') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

            @else

                <h2> {{ isset($blog->title) ? 'Edit: '. $blog->title : 'Add Tarieven' }}</h2>

                <a href="{{ URL::to('admin/tarieven') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

            @endif

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

                @if(Route::currentRouteName() == 'add-bewindvoering' || Route::currentRouteName() == 'edit-bewindvoering')

                    {!! Form::open(array('url' => array('admin/bewindvoering/add'),'class'=>'form-horizontal padding-15','name'=>'addbewindvoering_form','id'=>'addbewindvoering_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                    <input type="hidden" name="type" value="1">

                @elseif(Route::currentRouteName() == 'add-mentorschap' || Route::currentRouteName() == 'edit-mentorschap')

                    {!! Form::open(array('url' => array('admin/mentorschap/add'),'class'=>'form-horizontal padding-15','name'=>'addmentorschap_form','id'=>'addmentorschap_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                    <input type="hidden" name="type" value="2">

                @elseif(Route::currentRouteName() == 'add-curatele' || Route::currentRouteName() == 'edit-curatele')

                    {!! Form::open(array('url' => array('admin/curatele/add'),'class'=>'form-horizontal padding-15','name'=>'addcuratele_form','id'=>'addcuratele_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                    <input type="hidden" name="type" value="3">

                @else

                    {!! Form::open(array('url' => array('admin/tarieven/add'),'class'=>'form-horizontal padding-15','name'=>'addtarieven_form','id'=>'addtarieven_form','role'=>'form','enctype' => 'multipart/form-data')) !!}
                    <input type="hidden" name="type" value="4">

                @endif

                <input type="hidden" name="id" value="{{ isset($blog->id) ? $blog->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" value="{{ isset($blog->title) ? $blog->title : null }}" class="form-control">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Homepage Button Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="button_title" value="{{ isset($blog->button_title) ? $blog->button_title : null }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Page Link</label>
                        <div class="col-sm-9">
                            <input type="text" name="link" value="{{ isset($blog->link) ? $blog->link : null }}" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" rows="10" class="form-control summernote">{{ isset($blog->description) ? $blog->description : null }}</textarea>
                    </div>
                </div>

                <style>

                    .checkbox input[type="checkbox"]
                    {
                        opacity: 1;
                    }

                    .checkbox label::before {
                        display: none;
                    }

                </style>

                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Blog Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">

                                @if(isset($blog->image))

                                        @if($blog->image)

                                            <img src="{{ URL::asset('upload/blogs/'.$blog->image) }}" width="100">

                                        @endif

                                @endif

                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle">
                            </div>
                        </div>

                    </div>
                </div>

                    <div class="form-group">
                        <label for="avatar" class="col-sm-3 control-label">Homepage Blog Icon</label>
                        <div class="col-sm-9">
                            <div class="media">
                                <div class="media-left">

                                    @if(isset($blog->icon))

                                        @if($blog->icon)

                                            <img src="{{ URL::asset('upload/blogs/icons/'.$blog->icon) }}" width="100">

                                        @endif

                                    @endif

                                </div>
                                <div class="media-body media-middle">
                                    <input type="file" name="icon" class="filestyle">
                                </div>
                            </div>

                        </div>
                    </div>


                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">

                        @if(Route::currentRouteName() == 'add-bewindvoering' || Route::currentRouteName() == 'edit-bewindvoering')

                            <button type="submit" class="btn btn-primary">{{ isset($blog->title) ? 'Edit Bewindvoering' : 'Add Bewindvoering' }}</button>

                        @elseif(Route::currentRouteName() == 'add-mentorschap' || Route::currentRouteName() == 'edit-mentorschap')

                            <button type="submit" class="btn btn-primary">{{ isset($blog->title) ? 'Edit Mentorschap' : 'Add Mentorschap' }}</button>

                        @elseif(Route::currentRouteName() == 'add-curatele' || Route::currentRouteName() == 'edit-curatele')

                            <button type="submit" class="btn btn-primary">{{ isset($blog->title) ? 'Edit Curatele' : 'Add Curatele' }}</button>

                        @else

                            <button type="submit" class="btn btn-primary">{{ isset($blog->title) ? 'Edit Tarieven' : 'Add Tarieven' }}</button>

                        @endif

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
