<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 <div class="sidebar-user">
		<div class="media sidebar-padding">
			<div class="media-left media-middle">

				@if(Auth::user()->image_icon)
                    <img src="{{ URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg') }}" width="60" alt="person" class="img-circle">
                @else
                    <img src="{{ URL::asset('admin_assets/images/guy.jpg') }}" alt="person" class="img-circle" width="60"/>
                @endif
			</div>
			<div class="media-body media-middle">

				<a href="{{ URL::to('admin/profile') }}" class="h4 margin-none">{{ Auth::user()->name }}</a>
				<ul class="list-unstyled list-inline margin-none">
					<li><a href="{{ URL::to('admin/profile') }}"><i class="md-person-outline"></i></a></li>
					@if(Auth::User()->usertype=="Admin")
					<li><a href="{{ URL::to('admin/settings') }}"><i class="md-settings"></i></a></li>
					@endif
					<li><a href="{{ URL::to('admin/logout') }}"><i class="md-exit-to-app"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">

               @if(Auth::user()->usertype=='Admin')

               		<li class="{{classActivePath('dashboard')}}"><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>

                    <li class="{{classActivePath('faqs')}}"><a href="{{ URL::to('admin/faqs') }}"><i class="fa fa-question"></i> FAQ's</a></li>

                    <li class="{{classActivePath('bewindvoering')}}"><a href="{{ URL::to('admin/bewindvoering') }}"><i class="fa fa-list"></i> Bewindvoering</a></li>

	                <li class="{{classActivePath('mentorschap')}}"><a href="{{ URL::to('admin/mentorschap') }}"><i class="fa fa-list"></i> Mentorschap</a></li>

                    <li class="{{classActivePath('curatele')}}"><a href="{{ URL::to('admin/curatele') }}"><i class="fa fa-list"></i> Curatele</a></li>

                    <li class="{{classActivePath('tarieven')}}"><a href="{{ URL::to('admin/tarieven') }}"><i class="fa fa-list"></i> Tarieven</a></li>

	                <li class="{{classActivePath('settings')}}"><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i>Settings</a></li>

                @endif

			</ul>


		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 @if(Auth::user()->image_icon)
                                <img src="{{ URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg') }}" width="60" alt="person" class="img-circle border-white">
							@else
    							<img src="{{ URL::asset('admin_assets/images/guy.jpg') }}" alt="person" class="img-circle border-white" width="60"/>
							@endif
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="{{ URL::to('admin/profile') }}" class="h4">{{ Auth::user()->name }}</a>
						<a href="{{ URL::to('admin/logout') }}" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="{{ URL::to('admin/profile') }}"><i class="md md-person-outline"></i> Account</a></li>

				@if(Auth::user()->usertype=='Admin')

				<li><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i> Settings</a></li>

				@endif

				<li><a href="{{ URL::to('admin/logout') }}"><i class="md md-exit-to-app"></i> Logout</a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->

<style>

    .sidebar .nav-sidebar > li > a
    {
        padding: 20px 0px 20px 55px;
    }
</style>
