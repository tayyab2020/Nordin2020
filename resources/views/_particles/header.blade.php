<!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container container-header">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}" style="padding-right: 0px;">

          @if(getcong('site_logo')) <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt=""> @else {{getcong('site_name')}} @endif

          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-top" style="margin: 0;padding: 0;">

            <button style="border: 0;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top" aria-expanded="true">
                <i class="fa fa-close"></i>
            </button>

          <ul class="nav navbar-nav navbar-right">
              <li class="{{classActivePathPublic('')}}"><a href="{{ URL::to('/') }}">{{__('text.Home')}}</a></li>
              <li class="{{classActivePathPublic('bewindvoering')}}"><a href="{{route('Bewindvoering')}}">Bewindvoering</a></li>
              <li class="{{classActivePathPublic('mentorschap')}}"><a href="{{route('Mentorschap')}}">Mentorschap</a></li>
              <li class="{{classActivePathPublic('curatele')}}"><a href="{{ route('Curatele') }}">Curatele</a></li>
              <li class="{{classActivePathPublic('tarieven')}}"><a href="{{ route('Tarieven') }}">Tarieven</a></li>
              <li style="margin-right: 10px;"><a href="{{ URL::to('contact') }}" class="signup col-lg-12 col-md-3 col-sm-6 col-xs-6" style="margin-left: 0;float: none;">Contact</a></li>
              <li><a href="https://mijn.onview.nl/" class="signup col-lg-12 col-md-3 col-sm-6 col-xs-6" style="margin-left: 0;float: none;">Mijn dossier</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
   <!-- end:navbar -->

<style>

    .navbar-default .navbar-brand::after
    {
        display: none;
    }

    @media screen and (max-width: 767px)
    {
        .below-btn{ margin-top: 10px;text-align: left !important; margin-left: 15px !important; }
    }

    a{outline: none !important;}

    .signup
    {
        text-align: center;
    }

    @media (max-width: 1200px)
    {
        .navbar-collapse.collapse
        {
            display: none !important;
            overflow-y: auto !important;
            border-top-color: #3bafda !important;
            overflow-x: visible !important;
            border-top: 1px solid;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            padding-right: 15px;
            padding-left: 15px;

        }
    }

    .collapse.in
    {
        display: block !important;
    }

    @media (max-width: 1200px)
    {
        .navbar-toggle
        {
            display: block;
            margin-top: 22px;
        }

        .navbar-header
        {
            float: none;
            min-height: 80px;
        }
    }

    .navbar-default .navbar-nav > li > a
    {
        font-size: 14px;
    }

    .signin
    {
        padding: 5px 15px !important;
        margin-top: 24px;
    }

    @media (min-width: 768px)
    {
        .container-header
        {
            padding: 0;
            width: 100%;
        }
    }

    @media (min-width: 1200px)
    {
        .container-header
        {
            padding: 0;
            width: 95%;
        }
    }

    @media screen and (max-width: 1200px)
    {
        .navbar-default .navbar-nav > li > a{
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 15px;
        }

        .navbar-nav > li
        {
            float: none;
        }

        .navbar-default .navbar-nav > .active > a::after
        {
            display: none;
        }

        .navbar-right
        {
            float: none !important;
            margin: 7.5px -15px;
        }

        .signup
        {
            margin-left: 15px !important;
        }
    }

    @media screen and (max-width: 470px)
    {
        .navbar-brand
        {
            width: 70%;
        }

        .navbar-brand img
        {
            width: 100% !important;
        }
    }

    .hasyTc
    {
        display: none;
    }

</style>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+31633487916", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
