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
                        <h2>Details</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">{{__('text.Home')}}</a></li>
                        <li class="active">Details</li>
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
                                            <h3 style="font-weight: 600;font-size: 30px;text-align: center;">Detail of the person</h3>
                                        </div>

                                        {!! Form::open(array('url' => 'details','class'=>'','id'=>'contactform','role'=>'form')) !!}

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="call_sign" class="form-control" placeholder="Call Sign">
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="initials" class="form-control" placeholder="Initials *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="last_name" class="form-control" placeholder="Last Name *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="insertions" class="form-control" placeholder="Insertions">
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="place" class="form-control" placeholder="Place *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone Number *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="bsn" class="form-control" placeholder="BSN *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" name="address" class="form-control" placeholder="Address *" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Gender *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="gender" value="Male" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Male</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="gender" value="Female"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Female</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Date of birth *" name="dob" class="form-control" id='datetimepicker4' required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Birthplace *" name="birthplace" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Nationality *" name="nationality" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Country of origin *" name="country" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Marital Status *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="marital_status" value="Married" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Married</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="Unmarried"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Unmarried</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="Divorced"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Divorced</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="Registered Partnership"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Registered Partnership</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="marital_status" value="Widow / Widower"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Widow / Widower</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Living Situation *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="living_situation" value="Single" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Single</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Single with children"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Single with children</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Living Together"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Living Together</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Living with children"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Living with children</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Stay in an institution"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Stay in an institution</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Without permanent residence"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Without permanent residence</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Living with parents"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Living with parents</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="living_situation" value="Boarder"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Boarder</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Partner Data:</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="First Name" name="partner_first_name" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Last Name" name="partner_last_name" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Insertions" name="partner_insertions" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Call Sign" name="partner_call_sign" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Gender</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="partner_gender" value="Male" />
                                                            <span class="radio"></span>
                                                            <span class="label">Male</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="partner_gender" value="Female"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Female</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Date of birth" name="partner_dob" class="form-control" id='datetimepicker5' />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Birthplace" name="partner_birthplace" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Nationality" name="partner_nationality" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Country of origin" name="partner_country" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="BSN" name="partner_bsn" class="form-control" />
                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Applicant:</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Registration made by *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="registration" value="Myself" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Myself</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="Caregiver"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Caregiver</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="Older"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Older</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="registration" value="Other"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Other</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Which Measure *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="measure" value="Receivership" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Receivership</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="Administration"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Administration</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="Management and mentorship"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Management and mentorship</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="measure" value="Mentorship only"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Mentorship only</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Name of applicant *" name="name_of_applicant" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='email' placeholder="Email *" name="email" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Phone Number *" name="applicant_phone" class="form-control" required />
                                            </div>

                                        </div>

                                        <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Financial Details:</h3>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">House *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="house" value="Rent" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">Rent</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Home"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Home</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="AWBZ"/>
                                                            <span class="radio"></span>
                                                            <span class="label">AWBZ</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Room"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Room</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="house" value="Living at home"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Living at home</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Income (Multiple choices possible)</h4>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Salary">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Salary</span>
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
                                                        <input type="checkbox" name="income[]" value="WAO / WIA">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">WAO / WIA</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="AOW">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">AOW</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Retirement">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Retirement</span>
                                                    </label>

                                                    <label class="container1">
                                                        <input type="checkbox" name="income[]" value="Other">
                                                        <span class="checkmark"></span>
                                                        <span class="checkmark-text">Other</span>
                                                    </label>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Bank Name *" name="bank" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="Account Number *" name="account_number" class="form-control" required />
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="display: inline-block;width: 100%;margin: 20px 5px;">

                                                <div style="position: relative;width: 100%;">

                                                    <h4 style="margin-bottom: 20px;padding-left: 5px;">Currently under administration or guardianship *</h4>

                                                    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label" style="width: 100%;min-height: 50px;text-align: left;">

                                                        <label style="margin-left: 5px;display: block;">
                                                            <input type="radio" name="currently" value="Rent" checked />
                                                            <span class="radio"></span>
                                                            <span class="label">No</span>
                                                        </label>

                                                        <label style="margin-left: 5px;display: block;margin-top: 10px;">
                                                            <input type="radio" name="currently" value="Home"/>
                                                            <span class="radio"></span>
                                                            <span class="label">Yes</span>
                                                        </label>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type='text' placeholder="If so, with whom?" name="with_whom" class="form-control" />
                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin-top: 20px;">
                                                <textarea style="border-radius: 10px;" placeholder="What is the reason you want to switch" rows="5" name="reason" class="form-control"></textarea>
                                            </div>

                                        </div>

                                        <div style="margin-top: 20px;margin-bottom: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group" style="margin: 0;">
                                                <button style="outline: none;" type="submit" name="submit" class="btn btn-warning"><i class="fa fa-envelope-o"></i> Bericht versturen</button>
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
