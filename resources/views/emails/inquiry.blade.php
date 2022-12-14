<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{getcong('site_name')}}</title>


    <style>

        @media (max-width: 768px)
        {
            #res
            {
                width: 90% !important;
            }
        }

    </style>

</head>
<body>

@if(Config::get('app.locale') == 'en')

    <div style="background: #dce36d;width: 50%;padding: 20px;border-radius: 20px;" id="res">

        <p style="color: black;">Dear {{$gender}} {{$username}},</p>
        <p style="color: black;">You requested a inquiry about  "{{$property_name}}". We expect the real estate agent to contact you in near future.</p>
        <p style="color: black;">Message: "{!! $inquiry !!}"</p>
        <p style="color: black;">The real estate agent will contact you using the following information:</p>
        <img src="{{ $message->embed(public_path() . '/assets/img/signs.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">Email Address: </b><span style="color: #7474d3;font-weight: 700;">{{$email}}</span><br><br>

        @if($phone)

            <img src="{{ $message->embed(public_path() . '/assets/img/communications.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">Telephone Number: </b><span style="color: #7474d3;font-weight: 700;">{{$phone}}</span>

        @endif

    </div>

@else

    <?php if($gender == 'Mr.'){ $gender = 'meneer'; }else{ $gender = 'mevrouw'; } ?>

    @if($user_type)

        <div style="background: #dce36d;width: 50%;padding: 20px;border-radius: 20px;" id="res">

            <p style="color: black;">Bevestiging contact</p>
            <p style="color: black;">Beste {{$username}},</p>
            <p style="color: black;">Je hebt een vraag gesteld over ???{{$property_name}}". We verwachten dat {{$broker_name}} z.s.m. contact met je opneemt.</p>
            <p style="color: black;">Bericht: "{!! $inquiry !!}"</p>
            <p style="color: black;">Je hebt aangegeven dat je bereikbaar bent via de volgende gegevens:</p>
            <img src="{{ $message->embed(public_path() . '/assets/img/signs.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">E-mailadres: </b><span style="color: #7474d3;font-weight: 700;">{{$email}}</span><br><br>

            @if($phone)

                <img src="{{ $message->embed(public_path() . '/assets/img/communications.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">Telefoonnummer: </b><span style="color: #7474d3;font-weight: 700;">{{$phone}}</span>

            @endif

        </div>

    @else

        <div style="background: #dce36d;width: 50%;padding: 20px;border-radius: 20px;" id="res">

            <p style="color: black;">Bevestiging contact</p>
            <p style="color: black;">Beste {{$username}},</p>
            <p style="color: black;">Je hebt een vraag gesteld over ???{{$property_name}}". We verwachten dat de makelaar z.s.m. contact met je opneemt.</p>
            <p style="color: black;">Bericht: "{!! $inquiry !!}"</p>
            <p style="color: black;">Je hebt aangegeven dat je bereikbaar bent via de volgende gegevens:</p>
            <img src="{{ $message->embed(public_path() . '/assets/img/signs.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">E-mailadres: </b><span style="color: #7474d3;font-weight: 700;">{{$email}}</span><br><br>

            @if($phone)

                <img src="{{ $message->embed(public_path() . '/assets/img/communications.png') }}" style="width: 13px;margin-right: 8px;display: block;float: left;margin-top: 4px;"><b style="color: black;">Telefoonnummer: </b><span style="color: #7474d3;font-weight: 700;">{{$phone}}</span>

            @endif

        </div>

    @endif

@endif

</body>
</html>
