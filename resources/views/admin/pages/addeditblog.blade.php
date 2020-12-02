@extends("admin.admin_app")

@section("content")

    <div id="main">
        <div class="page-header">

            <h2> {{ isset($blog->title) ? 'Edit: '. $blog->title : 'Add Blog' }}</h2>

            <a href="{{ URL::to('admin/blogs') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

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

                {!! Form::open(array('url' => array('admin/blogs/addblog'),'class'=>'form-horizontal padding-15','role'=>'form','enctype' => 'multipart/form-data')) !!}

                <input type="hidden" name="id" value="{{ isset($blog->id) ? $blog->id : null }}">

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" value="{{ isset($blog->title) ? $blog->title : old('title') }}" class="form-control">
                    </div>
                </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Homepage Button Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="button_title" value="{{ isset($blog->button_title) ? $blog->button_title : old('button_title') }}" class="form-control">
                        </div>
                    </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Homepage Visible</label>
                    <div class="col-sm-9">
                        <select name="visible" class="form-control">
                            <option @if(isset($blog) && $blog->visible) selected @endif value="1">Yes</option>
                            <option @if(isset($blog) && !$blog->visible) selected @endif value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Link</label>
                    <div class="col-sm-9">
                        <select name="menu" class="form-control">
                            <option value="">Select Menu to link</option>
                            @foreach($menus as $menu)
                                <option @if(isset($blog) && $blog->menu == $menu->id) selected @endif value="{{$menu->id}}">{{$menu->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Page Link</label>
                    <div class="col-sm-9">
                        <input type="text" name="link" value="{{ isset($blog->link) ? $blog->link : old('link') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Blog order for homepage</label>
                    <div class="col-sm-9">
                        <input type="number" name="order_blog" value="{{ isset($blog->order_blog) ? $blog->order_blog : old('order_blog') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea name="description" rows="10" class="form-control summernote">{{ isset($blog->description) ? $blog->description : old('description') }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Homepage Description</label>
                    <div class="col-sm-9">
                        <textarea name="homepage_description" rows="10" class="form-control summernote">{{ isset($blog->homepage_description) ? $blog->homepage_description : old('homepage_description') }}</textarea>
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

                        <button type="submit" class="btn btn-primary">{{ isset($blog->title) ? 'Edit Blog' : 'Create Blog' }}</button>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection


