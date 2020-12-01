<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    {{--<!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">


    <link href="{{asset('assets/css/'.getcong('site_style').'.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">--}}

</head>

<body id="top">

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-container" style="margin: 0;">
                    <div class="blog-content" style="padding:0px;">

                        <div class="blog-text contact" style="padding: 0;">
                            <div class="row" style="margin: 0;">


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;box-shadow: -1px 2px 15px 6px #dbdbdb38;background-color: white;border-radius: 10px;">

                                    <div class="blog-title" style="padding: 0;margin-bottom: 0;">
                                        <h3 style="font-weight: 600;font-size: 30px;text-align: center;">Details of the person</h3>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Call Sign</label>
                                            <input type="text" name="call_sign" value="{{$details->call_sign}}" class="form-control" placeholder="Call Sign">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <?php $img = public_path('assets\img\img01.jpg'); $img1 = asset('assets/img/img01.jpg'); $img2 = url('assets/img/img01.jpg'); ?>

                                        <img class="img-fluid" src="{{$img2}}" style="width:50%; height:200px;">
                                            <img class="img-fluid" src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg" style="width:50%; height:200px;">


                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Initials * {{$img2}}</label>
                                            <input type="text" name="initials" value="{{$details->initials}}" class="form-control" placeholder="Initials *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>First Name *</label>
                                            <input type="text" name="first_name" value="{{$details->first_name}}" class="form-control" placeholder="First Name *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Last Name *</label>
                                            <input type="text" name="last_name" value="{{$details->last_name}}" class="form-control" placeholder="Last Name *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Insertions</label>
                                            <input type="text" name="insertions" value="{{$details->insertions}}" class="form-control" placeholder="Insertions">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Postal Code *</label>
                                            <input type="text" name="postal_code" value="{{$details->postal_code}}" class="form-control" placeholder="Postal Code *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Place *</label>
                                            <input type="text" name="place" value="{{$details->place}}" class="form-control" placeholder="Place *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Phone Number *</label>
                                            <input type="text" name="phone" value="{{$details->phone}}" class="form-control" placeholder="Phone Number *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>BSN *</label>
                                            <input type="text" name="bsn" value="{{$details->bsn}}" class="form-control" placeholder="BSN *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Address *</label>
                                            <input type="text" name="address" value="{{$details->address}}" class="form-control" placeholder="Address *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Gender *</label>
                                            <input type="text" name="gender" value="{{$details->gender}}" class="form-control" placeholder="Gender *">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Date of birth *</label>
                                            <input type='text' placeholder="Date of birth *" name="dob" value="{{$details->dob}}" id='datetimepicker4' class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Birthplace *</label>
                                            <input type='text' placeholder="Birthplace *" name="birthplace" value="{{$details->birthplace}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Nationality *</label>
                                            <input type='text' placeholder="Nationality *" name="nationality" value="{{$details->nationality}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Country of origin *</label>
                                            <input type='text' placeholder="Country of origin *" name="country" value="{{$details->country}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Marital Status *</label>
                                            <input type='text' placeholder="Marital Status *" name="marital_status" value="{{$details->marital_status}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Living Situation *</label>
                                            <input type='text' placeholder="Living Situation *" name="living_situation" value="{{$details->living_situation}}" class="form-control" />
                                        </div>

                                    </div>


                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Partner Data:</h3>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>First Name</label>
                                            <input type='text' placeholder="First Name" name="partner_first_name" value="{{$details->partner_first_name}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Last Name</label>
                                            <input type='text' placeholder="Last Name" name="partner_last_name" value="{{$details->partner_last_name}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Insertions</label>
                                            <input type='text' placeholder="Insertions" name="partner_insertions" value="{{$details->partner_insertions}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Call Sign</label>
                                            <input type='text' placeholder="Call Sign" name="partner_call_sign" value="{{$details->partner_call_sign}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Gender</label>
                                            <input type='text' placeholder="Gender" name="partner_gender" value="{{$details->partner_gender}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Date of birth</label>
                                            <input type='text' placeholder="Date of birth" name="partner_dob" value="{{$details->partner_dob}}" id='datetimepicker5' class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Birthplace</label>
                                            <input type='text' placeholder="Birthplace" name="partner_birthplace" value="{{$details->partner_birthplace}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Nationality</label>
                                            <input type='text' placeholder="Nationality" name="partner_nationality" value="{{$details->partner_nationality}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Country of origin</label>
                                            <input type='text' placeholder="Country of origin" name="partner_country" value="{{$details->partner_country}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>BSN</label>
                                            <input type='text' placeholder="BSN" name="partner_bsn" value="{{$details->partner_bsn}}" class="form-control" />
                                        </div>

                                    </div>

                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Applicant:</h3>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Registration made by *</label>
                                            <input type='text' placeholder="Registration made by *" name="registration" value="{{$details->registration}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Which Measure *</label>
                                            <input type='text' placeholder="Which Measure *" name="measure" value="{{$details->measure}}" class="form-control" />
                                        </div>

                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Name of applicant *</label>
                                            <input type='text' placeholder="Name of applicant *" name="name_of_applicant" value="{{$details->name_of_applicant}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Email *</label>
                                            <input type='email' placeholder="Email *" name="email" value="{{$details->email}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Phone Number *</label>
                                            <input type='text' placeholder="Phone Number *" name="applicant_phone" value="{{$details->applicant_phone}}" class="form-control" />
                                        </div>

                                    </div>

                                    <h3 style="text-align: center;margin: 20px 0px;display: inline-block;width: 100%;">Financial Details:</h3>


                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>House *</label>
                                            <input type='text' placeholder="House *" name="house" value="{{$details->house}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Income (Multiple choices possible)</label>
                                            <input type='text' name="income" placeholder="Income (Multiple choices possible)" value="{{$incomes}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Bank Name *</label>
                                            <input type='text' placeholder="Bank Name *" name="bank" value="{{$details->bank}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Account Number *</label>
                                            <input type='text' placeholder="Account Number *" name="account_number" value="{{$details->account_number}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>Currently under administration or guardianship *</label>
                                            <input type='text' placeholder="Currently under administration or guardianship *" name="currently" value="{{$details->currently}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>If so, with whom?</label>
                                            <input type='text' placeholder="If so, with whom?" name="with_whom" value="{{$details->with_whom}}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="form-group" style="margin-top: 20px;">
                                            <label>What is the reason you want to switch</label>
                                            <textarea style="border-radius: 10px;" placeholder="What is the reason you want to switch" rows="5" name="reason" class="form-control">{{$details->reason}}</textarea>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
