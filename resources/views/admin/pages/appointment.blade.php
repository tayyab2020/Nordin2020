@extends("admin.admin_app")

@section("content")
    <div id="main">
        <div class="page-header">

            <h2>Appointment Data</h2>

        </div>

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

                <div id="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-container" style="margin: 0;">
                                    <div class="blog-content" style="padding:0px;">

                                        <div class="blog-text contact" style="padding: 0;">
                                            <div class="row" style="margin: 0;">

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

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;box-shadow: -1px 2px 15px 6px #dbdbdb38;background-color: white;border-radius: 10px;">

                                                    <div class="blog-title" style="padding: 0;margin-bottom: 0;">
                                                        <h3 style="font-weight: 600;font-size: 30px;text-align: center;">Detail of the person</h3>
                                                    </div>

                                                    {!! Form::open(array('url' => 'admin/details','role'=>'form')) !!}

                                                    <input type="hidden" name="id" value="{{$details->id}}">

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Call Sign</label>
                                                            <input type="text" name="call_sign" value="{{$details->call_sign}}" class="form-control" placeholder="Call Sign" @if(Route::currentRouteName() == 'view-details') disabled @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Initials *</label>
                                                            <input type="text" name="initials" value="{{$details->initials}}" class="form-control" placeholder="Initials *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>First Name *</label>
                                                            <input type="text" name="first_name" value="{{$details->first_name}}" class="form-control" placeholder="First Name *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Last Name *</label>
                                                            <input type="text" name="last_name" value="{{$details->last_name}}" class="form-control" placeholder="Last Name *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Insertions</label>
                                                            <input type="text" name="insertions" value="{{$details->insertions}}" class="form-control" placeholder="Insertions" @if(Route::currentRouteName() == 'view-details') disabled @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Postal Code *</label>
                                                            <input type="text" name="postal_code" value="{{$details->postal_code}}" class="form-control" placeholder="Postal Code *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Place *</label>
                                                            <input type="text" name="place" value="{{$details->place}}" class="form-control" placeholder="Place *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Phone Number *</label>
                                                            <input type="text" name="phone" value="{{$details->phone}}" class="form-control" placeholder="Phone Number *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>BSN *</label>
                                                            <input type="text" name="bsn" value="{{$details->bsn}}" class="form-control" placeholder="BSN *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Address *</label>
                                                            <input type="text" name="address" value="{{$details->address}}" class="form-control" placeholder="Address *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Gender *</label>
                                                            <input type="text" name="gender" value="{{$details->gender}}" class="form-control" placeholder="Gender *" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Date of birth *</label>
                                                            <input type='text' placeholder="Date of birth *" name="dob" value="{{$details->dob}}" id='datetimepicker4' class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Birthplace *</label>
                                                            <input type='text' placeholder="Birthplace *" name="birthplace" value="{{$details->birthplace}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Nationality *</label>
                                                            <input type='text' placeholder="Nationality *" name="nationality" value="{{$details->nationality}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Country of origin *</label>
                                                            <input type='text' placeholder="Country of origin *" name="country" value="{{$details->country}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Marital Status *</label>
                                                            <input type='text' placeholder="Marital Status *" name="marital_status" value="{{$details->marital_status}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Living Situation *</label>
                                                            <input type='text' placeholder="Living Situation *" name="living_situation" value="{{$details->living_situation}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>


                                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Partner Data:</h3>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>First Name</label>
                                                            <input type='text' placeholder="First Name" name="partner_first_name" value="{{$details->partner_first_name}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Last Name</label>
                                                            <input type='text' placeholder="Last Name" name="partner_last_name" value="{{$details->partner_last_name}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Insertions</label>
                                                            <input type='text' placeholder="Insertions" name="partner_insertions" value="{{$details->partner_insertions}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Call Sign</label>
                                                            <input type='text' placeholder="Call Sign" name="partner_call_sign" value="{{$details->partner_call_sign}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Gender</label>
                                                            <input type='text' placeholder="Gender" name="partner_gender" value="{{$details->partner_gender}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Date of birth</label>
                                                            <input type='text' placeholder="Date of birth" name="partner_dob" value="{{$details->partner_dob}}" id='datetimepicker5' class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Birthplace</label>
                                                            <input type='text' placeholder="Birthplace" name="partner_birthplace" value="{{$details->partner_birthplace}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Nationality</label>
                                                            <input type='text' placeholder="Nationality" name="partner_nationality" value="{{$details->partner_nationality}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Country of origin</label>
                                                            <input type='text' placeholder="Country of origin" name="partner_country" value="{{$details->partner_country}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>BSN</label>
                                                            <input type='text' placeholder="BSN" name="partner_bsn" value="{{$details->partner_bsn}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Applicant:</h3>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Registration made by *</label>
                                                            <input type='text' placeholder="Registration made by *" name="registration" value="{{$details->registration}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Which Measure *</label>
                                                            <input type='text' placeholder="Which Measure *" name="measure" value="{{$details->measure}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>


                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Name of applicant *</label>
                                                            <input type='text' placeholder="Name of applicant *" name="name_of_applicant" value="{{$details->name_of_applicant}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Email *</label>
                                                            <input type='email' placeholder="Email *" name="email" value="{{$details->email}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Phone Number *</label>
                                                            <input type='text' placeholder="Phone Number *" name="applicant_phone" value="{{$details->applicant_phone}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Financial Details:</h3>


                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>House *</label>
                                                            <input type='text' placeholder="House *" name="house" value="{{$details->house}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Income (Multiple choices possible)</label>
                                                            <input type='text' name="income" placeholder="Income (Multiple choices possible)" value="{{$details->income}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Bank Name *</label>
                                                            <input type='text' placeholder="Bank Name *" name="bank" value="{{$details->bank}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Account Number *</label>
                                                            <input type='text' placeholder="Account Number *" name="account_number" value="{{$details->account_number}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>Currently under administration or guardianship *</label>
                                                            <input type='text' placeholder="Currently under administration or guardianship *" name="currently" value="{{$details->currently}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @else required @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>If so, with whom?</label>
                                                            <input type='text' placeholder="If so, with whom?" name="with_whom" value="{{$details->with_whom}}" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif />
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin-top: 20px;">
                                                            <label>What is the reason you want to switch</label>
                                                            <textarea style="border-radius: 10px;" placeholder="What is the reason you want to switch" rows="5" name="reason" class="form-control" @if(Route::currentRouteName() == 'view-details') disabled @endif>{{$details->reason}}</textarea>
                                                        </div>

                                                    </div>

                                                    @if(Route::currentRouteName() != 'view-details')

                                                    <div style="margin-top: 20px;margin-bottom: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                        <div class="form-group" style="margin: 0;">
                                                            <button style="outline: none;" type="submit" name="submit" class="btn btn-warning"><i style="margin-right: 5px;font-size: 15px;" class="fa fa-envelope-o"></i> Save</button>
                                                        </div>

                                                    </div>

                                                    @endif

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

                    label
                    {
                        padding: 5px;
                    }

                    .form-control[disabled], fieldset[disabled] .form-control
                    {
                        background: transparent;
                    }

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


    </div>



@endsection
