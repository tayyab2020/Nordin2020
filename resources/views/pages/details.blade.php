@extends("app")

@section('head_title', 'Details | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")
    <!-- begin:header -->
    <div id="header" class="heading" style="background-image: url({{ URL::asset('assets/img/img01.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="page-title">
                        <h2>Aanmelden</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">{{__('text.Home')}}</a></li>
                        <li class="active">Aanmelden</li>
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

                            <div class="blog-text contact" style="padding: 0;">
                                <div class="row" style="margin: 0;">

                                    @if(Session::has('flash_message'))

                                        <div class="alert alert-success col-lg-10 col-md-12 col-sm-12 col-xs-12">
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

                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="padding: 0;box-shadow: -1px 2px 15px 6px #dbdbdb38;background-color: white;border-radius: 10px;">

                                        <div class="blog-title" style="padding: 0;margin-bottom: 0;">
                                            <h3 style="font-weight: 600;font-size: 30px;text-align: center;">Aanmeldformulier Optelbewind</h3>
                                        </div>

                                        {!! Form::open(array('url' => 'details','class'=>'','id'=>'contactform','role'=>'form')) !!}

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="call_sign" class="form-control" placeholder="Roepnaam">
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="initials" class="form-control" placeholder="Voorletters*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="first_name" class="form-control" placeholder="Voornamen voluit*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="last_name" class="form-control" placeholder="Achternaam*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="insertions" class="form-control" placeholder="Tussenvoegsels">
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="postal_code" class="form-control" placeholder="Postcode*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="place" class="form-control" placeholder="Plaats*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="phone" class="form-control" placeholder="Telefoonnummer**" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="bsn" class="form-control" placeholder="BSN">
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="address" class="form-control" placeholder="Adres*" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Geslacht *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="gender" value="Man" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Man</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="gender" value="Vrouw"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Vrouw</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Geboortedatum*" name="dob" class="form-control" id='datetimepicker4' required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Geboorteplaats" name="birthplace" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Nationaliteit" name="nationality" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Land van herkomst" name="country" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Burgelijke staat*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="marital_status" value="gehuwd" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">gehuwd</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="ongehuwd"/>
                                                            <span class="radio"></span>
                                                            <span class="label">ongehuwd</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="gescheiden"/>
                                                            <span class="radio"></span>
                                                            <span class="label">gescheiden</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="geregistreerd partnerschap"/>
                                                            <span class="radio"></span>
                                                            <span class="label">geregistreerd partnerschap</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="weduwe/weduwenaar"/>
                                                            <span class="radio"></span>
                                                            <span class="label">weduwe/weduwenaar</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Woonsituatie*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="living_situation" value="Alleenstaand" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Alleenstaand</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="alleenstaand met kinderen"/>
                                                            <span class="radio"></span>
                                                            <span class="label">alleenstaand met kinderen</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="samenwonend"/>
                                                            <span class="radio"></span>
                                                            <span class="label">samenwonend</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="samenwonend met kinderen"/>
                                                            <span class="radio"></span>
                                                            <span class="label">samenwonend met kinderen</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="verblijf in een instelling"/>
                                                            <span class="radio"></span>
                                                            <span class="label">verblijf in een instelling</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="zonder vaste woonplaats"/>
                                                            <span class="radio"></span>
                                                            <span class="label">zonder vaste woonplaats</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="inwonend bij ouders"/>
                                                            <span class="radio"></span>
                                                            <span class="label">inwonend bij ouders</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="kostganger"/>
                                                            <span class="radio"></span>
                                                            <span class="label">kostganger</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Gegevens partner</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Voornamen voluit" name="partner_first_name" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Achternaam" name="partner_last_name" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Tussenvoegsels" name="partner_insertions" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Roepnaam" name="partner_call_sign" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Geslacht</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="partner_gender" value="Man" />
                                                            <span class="radio"></span>
                                                            <span class="label">Man</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="partner_gender" value="Vrouw"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Vrouw</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Geboortedatum" name="partner_dob" class="form-control" id='datetimepicker5' />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Geboorteplaats" name="partner_birthplace" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Nationaliteit" name="partner_nationality" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Land van herkomst" name="partner_country" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="BSN" name="partner_bsn" class="form-control" />
                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Aanmelder</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Aanmelding gedaan door*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="registration" value="mijzelf" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">mijzelf</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="hulpverlener"/>
                                                            <span class="radio"></span>
                                                            <span class="label">hulpverlener</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="ouder"/>
                                                            <span class="radio"></span>
                                                            <span class="label">ouder</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="overig"/>
                                                            <span class="radio"></span>
                                                            <span class="label">overig</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Welke maatregel*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="measure" value="curatele" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">curatele</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="bewindvoering"/>
                                                            <span class="radio"></span>
                                                            <span class="label">bewindvoering</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="bewindvoering en mentorschap"/>
                                                            <span class="radio"></span>
                                                            <span class="label">bewindvoering en mentorschap</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="alleen mentorschap"/>
                                                            <span class="radio"></span>
                                                            <span class="label">alleen mentorschap</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Naam aanmelder*" name="name_of_applicant" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='email' placeholder="E-mail*" name="email" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Telefoonnummer*" name="applicant_phone" class="form-control" required />
                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Financiële gegevens</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Woning*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="house" value="Huur" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Huur</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Eigen huis"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Eigen huis</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="AWBZ"/>
                                                            <span class="radio"></span>
                                                            <span class="label">AWBZ</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Kamer"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Kamer</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Thuiswonend"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Thuiswonend</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Inkomen (meerdere keuzes mogelijk)</h4>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Loon">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Loon</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Wajong">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Wajong</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="WWB">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">WWB</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="WAO/WIA">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">WAO/WIA</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="AOW">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">AOW</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Pensioen">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Pensioen</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Overig">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Overig</span>
                                                    </label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Naam bank" name="bank" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Rekeningnummer" name="account_number" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Momenteel onder bewind of curatele?*</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="currently" value="Nee" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Nee</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="currently" value="Ja"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Ja</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Zo ja, bij wie?" name="with_whom" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <textarea style="border-radius: 10px;" placeholder="Wat is de reden dat u wilt overstappen" rows="5" name="reason" class="form-control"></textarea>
                                            </div>

                                        </div>

                                        <div style="margin-top: 20px;margin-bottom: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin: 0;">
                                                <button style="outline: none;" type="submit" name="submit" class="btn btn-warning"><i style="margin-right: 5px;font-size: 15px;" class="fa fa-envelope-o"></i> Versturen</button>
                                            </div>

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

        .container1 {
            display: flex;
            position: relative;
            padding: 0;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container1 input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: relative;
            height: 18px;
            width: 18px;
            background-color: #d5d5d5;
            display: flex;
            align-items: center;
            align-self: center;
            justify-content: center;
        }

        .checkmark-text
        {
            padding-left: 10px;
            font-size: 20px;
            font-weight: 600;
        }

        /* On mouse-over, add a grey background color */
        .container1:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container1 input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container1 input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container1 .checkmark:after {
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        input
        {
            border-radius: 50px !important;
            padding: 20px !important;
        }

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
            font-size: 160%;
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

        .bootstrap-datetimepicker-widget
        {
            background-color: white !important;
        }

        .bootstrap-datetimepicker-widget table td .glyphicon
        {
            color: #474747;
        }

        .bootstrap-datetimepicker-widget .timepicker-hour, .bootstrap-datetimepicker-widget .timepicker-minute
        {
            background: white;
        }

    </style>



    <script>

        $('#datetimepicker4').datetimepicker({format: 'DD/MM/YYYY',locale: 'nl'});
        $('#datetimepicker5').datetimepicker({format: 'DD/MM/YYYY',locale: 'nl'});

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
