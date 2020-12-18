@extends("admin.admin_app")

@section("content")

    <div id="main">
        <div class="page-header">

            <h2> {{ $banner->faq_banner ? 'Edit FAQ Banner' : 'Add FAQ Banner' }}</h2>

            <a href="{{ URL::to('admin/faqs') }}" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>

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

                {!! Form::open(array('url' => array('admin/faqs/addfaqbanner'),'class'=>'form-horizontal padding-15','name'=>'addfaq_form','id'=>'addfaq_form','role'=>'form','enctype' => 'multipart/form-data')) !!}


                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Banner Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">

                                @if($banner->faq_banner)

                                        <img src="{{ URL::asset('upload/faq_banner/'.$banner->faq_banner) }}" width="100">

                                @endif

                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="image" class="filestyle">
                            </div>
                        </div>

                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">

                        <button type="submit" class="btn btn-primary">{{ $banner->faq_banner ? 'Edit Banner' : 'Create Banner' }}</button>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>


    </div>

@endsection
