@extends("admin.admin_app")

@section("content")

<div id="main">
	<div class="page-header">
		<h1>Welcome to your dashboard</h1>
	</div>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            {{ Session::get('flash_message') }}
        </div>
    @endif


<div class="row widgets-row">

</div>

</div>

@endsection
