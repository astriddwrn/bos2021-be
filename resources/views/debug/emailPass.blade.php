<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-image: url("{{asset('Asset/Image/auth/bg-stars2.svg')}}"),
                            linear-gradient(195.99deg, #0C131B -57.79%, #0054A5 49.18%, #CDD8DD 151.55%);
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            display: inline-block;
            text-align: center;
            max-width: calc(100% - 2rem);
            margin: 2rem;
            width: 36rem;
        }
        .card{
            background:white;
            border-radius: 0.75rem;
            padding:2.5rem 0rem 2.5rem 0rem;
        }
        .content{
            color:rgba(0,0,0,0.82);
            padding:0rem 3.5rem 0rem 3.5rem;
            text-align: left;
            font-size: 1.1rem;
        }
        .content p{
            margin:1.5rem 0rem 1.5rem 0rem;
        }
        a.btn{
            background:rgb(37, 184, 222);
            border-radius:0.75rem;
            font-size:1.2rem;
            padding:0.7rem;
            margin-top: 1.25rem;
            display: block;
            text-align: center;
            text-decoration: none;
            color:white;
            font-weight: bold;
        }
        .line{
            margin-top:1.25rem;
            width:100%;
            border-bottom: 2px solid rgb(37, 184, 222);
        }
        .link{
            text-decoration: none;
            font-weight: bold;
            color: rgb(0,145,183);
        }
        .copy{
            padding: 1rem 0rem 1rem 0rem;
            color:white;
            font-size: 1.1rem;
        }
    </style>
</head>

<body style="background-image: url('{{asset('Asset/Image/auth/stars-png.png')}}'),
linear-gradient(195.99deg, #0C131B -57.79%, #0054A5 49.18%, #CDD8DD 151.55%);
margin: 0px; padding: 0px; text-align: center; font-family: Arial, Helvetica, sans-serif;">
    <div class="container">
        <div class="card">
            <div class="image">
                <a href="{{url('/')}}"><img class="" src="{{url('./Asset/Image/auth/logo-png.png')}}" alt=""></a>
            </div>
            <div class="content">
                <p>Hello sample2036</p>
                <p>You are receiving this email because we received a password reset request for your account</p>
                <a href="{{ $url }}" class="btn">Reset Password</a>
                <p>If you did not request a password reset, no further action is required.</p>
                <p>Regard,<br />
                    BNCC</p>
                <div class="line"></div>
                <p>If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</p>
                <p><a class="link" href="{{ $url }}">{{ $url }}</a></p>
            </div>
        </div>
        <div class="copy">
            All Right Reserved BNCC 2021 © Bina Nusantara Computer Club
        </div>
    </div>
</body>

</html>
