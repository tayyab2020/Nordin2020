@extends("app")
@section("content")

@include("_particles.slidersearch")

<!-- begin:content -->
    <div id="content" style="padding: 50px 0px 0px 0px;">

        @if(Session::has('flash_message'))
            <div class="alert alert-success alert-box" style="text-align: center;font-size: 16px;position: fixed;top: 20%;z-index: 1000;padding-right: 35px;background-color: rgb(0 0 0);color: rgb(255 255 255);border: 0;max-width: 400px;border-radius: 0;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute;top: 5px;right: 8px;font-size: 28px;line-height: 0.5;opacity: 0.8;font-weight: 100;text-shadow: none;color: #ffffff;">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-box" style="text-align: center;font-size: 16px;position: fixed;top: 20%;z-index: 1000;padding-right: 35px;background-color: rgb(0 0 0);color: rgb(255 255 255);border: 0;max-width: 400px;border-radius: 0;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute;top: 5px;right: 8px;font-size: 28px;line-height: 0.5;opacity: 0.8;font-weight: 100;text-shadow: none;color: #ffffff;">
                            <span aria-hidden="true">&times;</span></button>
                        {{$error}}
                    </div>
                @endforeach
            @endif

      <div class="container" style="width: 100%;">

              <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" style="display: flex;">

                  <div data-testid="key-services" class="css-htlmaj col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">

                      <div>

                          <div class="domain-home_ down is-visible">

                              <ul class="css-48sroz" style="list-style: none;padding: 0;display: flex;flex-wrap: wrap;justify-content: space-between;">

                                  <li style="display: flex;flex-direction: column;">

                                      <a target="_blank" href="#">
                                          Als u op zoek bent naar een professionele bewindvoerder die transpat is in uw (financiēle) zaken en persoonlijk betrokken is in uw situatie, dan bent u bij Optel beiwnd aan het juiste adres. Samen zorgen we ervoor dat u snel weer grip hebt op uw financiēn.
                                      </a>

                                      <div style="width: 100%;margin-bottom: 20px;">

                                          <img src="{{ URL::asset('assets/img/user1.png') }}" aria-hidden="true">

                                          <button class="btn btn-primary" style="outline: none;border-radius: 5px;">Ik wil meer weten over Optel bewind</button>

                                      </div>

                                  </li>

                                  <li style="display: flex;flex-direction: column;">

                                      <a target="_blank" href="#">
                                          Als u op zoek bent naar een professionele bewindvoerder die transpat is in uw (financiēle) zaken en persoonlijk betrokken is in uw situatie, dan bent u bij Optel beiwnd aan het juiste adres. Samen zorgen we ervoor dat u snel weer grip hebt op uw financiēn.
                                      </a>

                                      <div style="width: 100%;margin-bottom: 20px;">

                                          <img src="{{ URL::asset('assets/img/user1.png') }}" aria-hidden="true">

                                          <button class="btn btn-primary" style="outline: none;border-radius: 5px;">Ik wil meer weten over Optel bewind</button>

                                      </div>

                                  </li>

                                  <li style="display: flex;flex-direction: column;">

                                      <a target="_blank" href="#">
                                          Als u op zoek bent naar een professionele bewindvoerder die transpat is in uw (financiēle) zaken en persoonlijk betrokken is in uw situatie, dan bent u bij Optel beiwnd aan het juiste adres. Samen zorgen we ervoor dat u snel weer grip hebt op uw financiēn.
                                      </a>

                                      <div style="width: 100%;margin-bottom: 20px;">

                                          <img src="{{ URL::asset('assets/img/user1.png') }}" aria-hidden="true">

                                          <button class="btn btn-primary" style="outline: none;border-radius: 5px;">Ik wil meer weten over Optel bewind</button>

                                      </div>

                                  </li>

                                  <li style="display: flex;flex-direction: column;">

                                      <a target="_blank" href="#">
                                          Als u op zoek bent naar een professionele bewindvoerder die transpat is in uw (financiēle) zaken en persoonlijk betrokken is in uw situatie, dan bent u bij Optel beiwnd aan het juiste adres. Samen zorgen we ervoor dat u snel weer grip hebt op uw financiēn.
                                      </a>

                                      <div style="width: 100%;margin-bottom: 20px;">

                                          <img src="{{ URL::asset('assets/img/user1.png') }}" aria-hidden="true">

                                          <button class="btn btn-primary" style="outline: none;border-radius: 5px;">Ik wil meer weten over Optel bewind</button>

                                      </div>

                                  </li>

                              </ul>

                          </div>

                      </div>
                  </div>

              </div>

          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">

              <div style="background: white;padding: 20px;border-radius: 10px;box-shadow: 1px 1px 14px 2px #e7e7e7;">

                  <h2 style="margin-bottom: 30px;color: #868686;font-weight: 600;text-align: center;margin-top: 0px;">{{__('text.FAQs')}}</h2>

                  <section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg" style="padding: 0;margin: 0;width: 100%;">
                      <div class="cd-faq__items" style="padding: 0;">

                          <ul id="basics" class="cd-faq__group" style="padding: 0;">

                              @foreach($faqs as $key)

                                  <li class="cd-faq__item">
                                      <a class="cd-faq__trigger" href="#0"><span>{{$key->question}}</span></a>
                                      <div class="cd-faq__content">
                                          <div class="text-component">
                                              <p>{!! $key->answer !!}</p>
                                          </div>
                                      </div> <!-- cd-faq__content -->
                                  </li>

                              @endforeach


                          </ul> <!-- cd-faq__group -->

                      </div> <!-- cd-faq__items -->

                      <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

                      <div class="cd-faq__overlay" aria-hidden="true"></div>
                  </section> <!-- cd-faq -->

                  <div style="width: 100%;">

                      <img src="{{ URL::asset('assets/img/Career-in-Counseling_Image-1.jpg') }}" style="width: 100%;margin-top: 10px;" aria-hidden="true">

                      <a href="{{ URL::to('contact') }}" class="btn btn-primary b-text" style="margin-top: 20px;width: 100%;padding: 15px;font-size: 20px;outline: none;">Online verzoekschrift aanvraag bewindvoering</a>

                  </div>

              </div>

          </div>

      </div>
    </div>
    <!-- end:content -->

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/flaticon.css') }}"/>
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

<style>

    a:hover, a:focus
    {
        color: hsl(73, 46%, 55%);
    }

    label
    {
        font-size: 11px;
    }

    .cd-faq__item
    {
        background: #fafafa;
        /*box-shadow: 0px 0px 18px -8px rgb(196 196 196);*/
        border: 1px solid #efefef;
        margin-bottom: 10px;
    }

    .cd-faq__trigger
    {
        font-size: 12px;
        font-weight: 300;
        margin: 0;
        padding: var(--space-sm) var(--space-lg) var(--space-sm) var(--space-sm);
    }

    .cd-faq__items{position:static;height:auto;width:auto;-ms-flex-positive:1;flex-grow:1;overflow:visible;-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);padding:0 0 0 0.75em;padding:0 0 0 var(--space-sm);background:transparent}

    .cd-faq{position:relative;box-shadow:none;display:-ms-flexbox;display:flex}

    .cd-faq__content .text-component
    {
        font-size: 1.0rem;
    }

    .cd-faq__content p
    {
        color: hsl(0deg 0% 35%);
    }


    .ekko-lightbox .modal-dialog
    {
        margin: 10px;
    }

    @media (max-width: 768px)
    {
        .property-content h3, .property-text h3
        {
            font-size: 15px;
        }

        .property-content h3 small, .property-text h3 small
        {
            font-size: 11px;
            margin-top: 5px;
        }

        .extra-text span
        {
            font-size: 10px !important;
        }

        .extra-text img
        {
            width: 15px !important;
            height: 15px !important;
        }
    }

    small
    {
        line-height: 15px !important;
    }

    @media (max-width: 400px) {
        .status-responsive {
            width: 120px !important;
            font-size: 10px !important;
        }
    }

    @media (min-width: 1250px){
        .latest-container{padding: 0px 95px;}
        .show-more-container{padding: 0px 120px;}
    }

    @media (min-width: 1295px){
        .latest-container{padding: 0px 120px;}
        .show-more-container{padding: 0px 135px;}
    }

    .video-wrapper-inner .popup-video{position:relative;z-index:1;display:inline-block;width:50px;height:50px;line-height:50px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;-webkit-transition:all 0.3s ease-in-out 0s;-o-transition:all 0.3s ease-in-out 0s;transition:all 0.3s ease-in-out 0s;font-size:18px;color:#fff;background:#f9424b;text-align:center}

    @media (min-width: 1200px){.video-wrapper-inner .popup-video{width:70px;height:70px;line-height:70px;font-size:22px}}

    .video-wrapper-inner .popup-video:before{-webkit-transition:all 0.3s ease-in-out 0s;-o-transition:all 0.3s ease-in-out 0s;transition:all 0.3s ease-in-out 0s;content:'';position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;background:#f9424b;opacity:0.3;filter:alpha(opacity=30);border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;-webkit-animation:scaleicon 3s ease-in-out 0s infinite alternate;animation:scaleicon 3s ease-in-out 0s infinite alternate}.widget-video.style2 .popup-video{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}

    @-webkit-keyframes scaleicon{from{-ms-transform:scale(1,1);transform:scale(1,1)}50%{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}}

    @keyframes scaleicon{from{-ms-transform:scale(1,1);transform:scale(1,1)}50%{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}}

    .css-htlmaj
    {
        padding:0 18px;
        margin:0px auto 0px;
    }

    @media(min-width:1021px)
    {
        .css-htlmaj
        {
            padding:0 10px;
            margin-bottom:50px;
        }
    }

    .css-ce6ko1{font-size:25px;font-weight:bold;margin-bottom:18px;}

    @media(min-width:624px){.css-48sroz{display:block}}

    @media(min-width:1021px){.css-48sroz{border-radius:3px;display: block;}}

    .css-48sroz li{border-radius: 5px;font-weight:bold;margin:0px 0px 20px 0px;background-color:#fff;box-shadow:0 1px 3px 0 rgba(30,41,61,0.1),0 1px 2px 0 rgba(30,41,61,0.2);flex: 0 48%;}

    .css-48sroz li div
    {
        text-align: center;
    }

    .css-48sroz li div img
    {
        width: 30px;
    }

    .css-48sroz li div button
    {
        width: 75%;
        white-space: normal;
        font-size: 75%;
    }

    .css-48sroz li:hover,.css-48sroz li:focus{box-shadow:0 3px 6px 0 rgba(30,41,61,0.15),0 5px 10px 0 rgba(30,41,61,0.15);-webkit-transition:box-shadow ease-in 100ms;transition:box-shadow ease-in 100ms;z-index:1;}

    @media(min-width:1021px){.css-48sroz li{font-size:18px;text-align:center;box-shadow:0 1px 3px 0 rgba(30,41,61,0.1),0 1px 2px 0 rgba(30,41,61,0.2);}

    .css-48sroz a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:12px;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size: 90%;}

    @media(min-width:1021px){.css-48sroz a{display:block;padding:20px 18px;height:100%;}}

    .css-jeyium{stroke-linejoin:round;stroke-linecap:round;fill:none;vertical-align:middle;width:24px;height:24px;}

    @media(max-width:624px){.css-48sroz li{flex: 0 100%;}.b-text{font-size: 15px !important;white-space: normal;}}

    .latest
    {
        height: 210px;
    }

    .latest img
    {
        height: 100%;
    }

    .property-status img
    {
        display: inline-block;
    }

    .property-status a:focus
    {
        outline: none;
    }

    .modal-backdrop.fade
    {
        opacity: 0.5;
    }

   .ekko-lightbox .modal-header
    {
        min-height: 0;
        padding: 0;
        border: 0;
       display: none;

    }

    .ekko-lightbox .modal-title
    {
        display: none;
    }

    .ekko-lightbox .modal-header .close
    {
        font-size: 60px;
        position: absolute;
        right: -115px;
        top: -62px;
        opacity: 0.8;
        text-shadow: none;

    }

    .ekko-lightbox .modal-body
    {
        padding: 0;
    }

    .ekko-lightbox .modal-content
    {
        border:0;
    }

    .ekko-lightbox .close{
        position: absolute;
        right: 43px;
        top: -3px;
        opacity: 0.6;
        text-shadow: none;
        outline: 0;
    }

    .ekko-lightbox .close span{
        font-size: 88px;
    }

    a
    {
        text-decoration: none;
    }

    a:hover, a:focus
    {
        text-decoration: none;
    }

    .fade {
        opacity: 0;
        transition: all .2s linear;
    }

    .modal1.fade.in
    {
        display: flex !important;
    }

    .modal2.fade.in
    {
        display: flex !important;
    }

    .navbar-fixed-top, .navbar-fixed-bottom
    {
        -webkit-transform: none;
        transform: none;
    }


    .slick-slide
    {
        outline: none;
    }

    @media (min-width: 1200px){

        .slick-slide
        {
            padding: 0px 20px;
        }

    }

    @media (min-width: 1250px){

        .slick-slide
        {
            padding: 0px 30px;
        }

    }

    .property-container
    {
        box-shadow: 0 0rem 1.2rem -3px #c2c2c2;margin-bottom: 30px;padding: 0;
    }

    .slick-arrow{position:absolute;top:50%;width:60px;height:60px;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);background:rgba(#fff,0.8);color:#0b2047;text-align:center;cursor:pointer;z-index:1;width:48px;height:48px;background:#fff;color:#3c475b;border:0;border-radius:50%;box-shadow:0 1px 3px 0 rgba(30,41,61,0.1),0 1px 2px 0 rgba(30,41,61,0.2);opacity:0.9;}

    .slick-arrow:before
    {
        display: none;
    }

    .slick-arrow:hover , .slick-arrow:focus
    {
        outline: none;
        background: #fff;
    }

    .css-oee40j{stroke-linejoin:round;stroke-linecap:round;fill:none;vertical-align:middle;width:24px;height:24px;vertical-align:middle;}

    .css-oee40j:hover
    {
        color: #0ea800;
    }

    .slick-prev:hover, .slick-prev:focus, .slick-next:hover, .slick-next:focus
    {
        color: #0ea800;
    }

</style>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

<script src="{{ URL::asset('assets/js/util.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>

@include("_particles.subscribe")


@endsection
