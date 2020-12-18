@extends("app")

@section('head_title', 'Contact | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")
<!-- begin:header -->
    <div id="header" class="heading" style="background-image: url({{ URL::asset('assets/img/img01.jpg') }});">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-title">
              <h2>Contact</h2>
            </div>
            <ol class="breadcrumb">
              <li><a href="{{ URL::to('/') }}">{{__('text.Home')}}</a></li>
              <li class="active">Contact</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->
<!-- begin:content -->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-container" style="margin: 0;">
              <div class="blog-content" style="padding:0px;">
                  <div class="blog-title" style="padding: 0;">
                  <h3 style="font-weight: 100;">{!! $settings->contact_heading !!}</h3>

                </div>

                <div class="blog-text contact" style="padding: 0;">
                  <div class="row">

                      @if(Session::has('flash_message'))

                          <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                              {{ Session::get('flash_message') }}
                          </div>

                      @endif

                          <div class="message">
                          <!--{!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}-->

                              @if (count($errors) > 0)

                                  <div class="alert alert-danger">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif

                          </div>

                          <div class="col-md-8 col-sm-7">
                              {!! Form::open(array('url' => 'contact','class'=>'','id'=>'contactform','role'=>'form')) !!}


                              <div class="form-group">

                                  <div style="position: relative;width: 100%;">

                                      <h4 style="margin-bottom: 20px;">Wanneer wilt u gebeld worden?</h4>

                                      <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                          <label style="margin-left: 5px;display: block;">
                                              <input type="radio" name="time_slot" value="08:00 - 12:00" checked />
                                              <span class="radio"></span>
                                              <span class="label">08:00 - 12:00</span>
                                          </label>

                                          <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                              <input type="radio" name="time_slot" value="12:00 - 18:00"/>
                                              <span class="radio"></span>
                                              <span class="label">12:00 - 18:00</span>
                                          </label>

                                          <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                              <input type="radio" name="time_slot" value="Na 18:00 uur"/>
                                              <span class="radio"></span>
                                              <span class="label">Na 18:00 uur</span>
                                          </label>

                                          <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                              <input type="radio" name="time_slot" value="Ik wil liever mailcontact"/>
                                              <span class="radio"></span>
                                              <span class="label">Ik wil liever mailcontact</span>
                                          </label>

                                      </div>

                                  </div>

                              </div>

                              <div class="form-group" style="margin-top: 20px;">
                                  <label for="name" class="sr-only">Jouw naam</label>
                                  <input type="text" name="name" class="form-control" placeholder="Jouw naam">
                              </div>

                              <div class="form-group">
                                  <label for="email" class="sr-only">E-mailadres?</label>
                                  <input type="email" name="email" class="form-control" placeholder="E-mailadres?">
                              </div>

                              <div class="form-group">
                                  <label for="email" class="sr-only">Telefoonnummer</label>
                                  <input type="text" name="phone" class="form-control" placeholder="Telefoonnummer">
                              </div>

                              <div class="form-group">
                                  <label for="subject" class="sr-only">Onderwerp</label>
                                  <input type="text" name="subject" class="form-control" placeholder="Onderwerp">
                              </div>

                              <div class="form-group">
                                  <label for="name" class="sr-only">Jouw vraag of opmerking</label>
                                  <textarea name="user_message" class="form-control" rows="5" placeholder="Jouw vraag of opmerking"></textarea>
                              </div>

                              <div class="form-group" style="margin: 0;">
                                  <button type="submit" name="submit" class="btn btn-warning"><i class="fa fa-envelope-o"></i> Bericht versturen</button>
                              </div>

                              {!! Form::close() !!} <br>

                          </div>

                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:content -->

    <style>

        .bulgy-radios {
            width: 38rem;
            padding: 0rem 0 0rem 0rem;
            border-radius: 1rem;
            text-align: center;
        }
        .bulgy-radios label {
            display: inline-block;
            position: relative;
            height: 35px;
            padding-left: 20px;
            margin-bottom: 0;
            cursor: pointer;
            font-size: 25px;
            user-select: none;
            color: #555;
            letter-spacing: 1px;
        }
        .bulgy-radios label:hover input:not(:checked) ~ .radio {
            opacity: 0.8;
        }
        .bulgy-radios .label {
            display: flex;
            align-items: center;
            padding: 10px 30px 0px 0px;
            color: #0bae72;
        }
        .bulgy-radios .label span {
            line-height: 1em;
        }
        .bulgy-radios input {
            position: absolute;
            cursor: pointer;
            height: 0;
            width: 0;
            left: -2000px;
        }
        .bulgy-radios input:checked ~ .radio {
            background-color: #0ac07d;
            transition: background 0.3s;
        }
        .bulgy-radios input:checked ~ .radio::after {
            opacity: 1;
        }
        .bulgy-radios input:checked ~ .label {
            color: #0bae72;
        }
        .bulgy-radios input:checked ~ .label span {
            animation: bulge 0.75s forwards;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(1) {
            animation-delay: 0.025s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(2) {
            animation-delay: 0.05s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(3) {
            animation-delay: 0.075s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(4) {
            animation-delay: 0.1s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(5) {
            animation-delay: 0.125s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(6) {
            animation-delay: 0.15s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(7) {
            animation-delay: 0.175s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(8) {
            animation-delay: 0.2s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(9) {
            animation-delay: 0.225s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(10) {
            animation-delay: 0.25s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(11) {
            animation-delay: 0.275s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(12) {
            animation-delay: 0.3s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(13) {
            animation-delay: 0.325s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(14) {
            animation-delay: 0.35s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(15) {
            animation-delay: 0.375s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(16) {
            animation-delay: 0.4s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(17) {
            animation-delay: 0.425s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(18) {
            animation-delay: 0.45s;
        }
        .bulgy-radios input:checked ~ .label span:nth-child(19) {
            animation-delay: 0.475s;
        }
        .radio {
            position: absolute;
            top: 0.2rem;
            left: 0;
            height: 15px;
            width: 15px;
            min-height: 0px;
            background: #c9ded6;
            border-radius: 50%;
        }
        .radio::after {
            content: '';
            position: absolute;
            opacity: 0;
            top: 4px;
            left: 4px;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #fff;
        }
        @keyframes bulge {
            50% {
                transform: rotate(4deg);
                font-size: 1.5em;
                font-weight: bold;
            }
            100% {
                transform: rotate(0);
                font-size: 1em;
                font-weight: bold;
            }
        }

    </style>

    <script>

        const labels = document.querySelectorAll('.label');
        labels.forEach(label => {
            const chars = label.textContent.split('');
            label.innerHTML = '';
            chars.forEach(char => {
                label.innerHTML += `<span>${char === ' ' ? '&nbsp' : char}</span>`;
            });
        })

    </script>

@endsection
