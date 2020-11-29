<!-- begin:footer -->
    <div id="footer">
      <div class="container">
       <div class="row">

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
                <h3 style="color: #4b4b4b;margin-top: 0;">{{getcong('site_name')}}</h3>
                <ul class="list-unstyled">
                    <li><a href="{{ URL::to('over-ons') }}">{{__('text.About Us')}}</a></li>
                    <li><a href="{{ URL::to('contact') }}">{{__('text.Contact Us')}}</a></li>
                    <li><a href="{{ URL::to('cookieverklaring')}}">{{__('text.Careers with Us')}}</a></li>
                    <li><a href="{{ URL::to('algemene-voorwaarden')}}">{{__('text.Terms & Conditions')}}</a></li>
                    <li><a href="{{ URL::to('privacy-beleid')}}">{{__('text.Privacy Policy')}}</a></li>

                </ul>
            </div>
          </div>

           @if(getcong('footer_widget1'))

           <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="widget">
                   {!!getcong('footer_widget1')!!}
               </div>
           </div>

           @endif

           @if(getcong('footer_widget2'))

           <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="widget">
                   {!!getcong('footer_widget2')!!}
               </div>
           </div>

           @endif

           @if(getcong('footer_widget3'))

           <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="widget">
                   {!!getcong('footer_widget3')!!}

               </div>
           </div>

           @endif

        </div>
        <!-- break -->


          <!-- begin:copyright -->
          <div class="row">

            <div class="col-md-12 copyright">
              <ul class="list-inline social-links">

                  <a href="#top" class="btn btn-primary scroltop"><i class="fa fa-angle-up"></i></a>

                  <h4 style="margin-bottom: 30px;font-size: 18px;color: inherit;">{{__('text.Stay informed and quickly find, sell or rent your home')}}</h4>

                  @if(getcong('social_facebook'))
                      <li><a href="{{getcong('social_facebook')}}" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  @endif


                  @if(getcong('social_twitter'))
                      <li><a href="{{getcong('social_twitter')}}" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  @endif

                    @if(getcong('social_linkedin'))
                        <li><a href="{{getcong('social_linkedin')}}" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    @endif

                    @if(getcong('social_gplus'))
                        <li><a href="{{getcong('social_gplus')}}" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    @endif

              </ul>

            <p>{{getcong('site_copyright')}}</p>


            <!--<ul class="list-inline social-links">
              <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus"><i class="fa fa-google-plus"></i></a></li>
            </ul>-->
          </div>
        </div>
        <!-- end:copyright -->

      </div>
    </div>
    <!-- end:footer -->

<style>

    #footer{ background-color: white;}

    #footer .widget > ul > li, #footer .widget > ul > li > a, #footer .widget ul > li, #footer .widget ul > li > a
    {
        font-weight: bold;
    }

    .widget ul li a{color: #3bafda !important;}

    .widget ul li a:hover{color: #000000 !important;}

    .copyright .social-links > li > a > .fa
    {
        color: #fff !important;
    }

</style>
