<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="flex flex-row ">
        <div class="w-5/12 h-screen flex flex-col items-center">
            <img src="{{url('./Asset/Image/auth/logo.svg')}}" alt="">
            <form action="">
                <div class="personal-sec">
                    <div>
                        <div class="text-cDarkBlue font-sans font-semibold">Full Name</div>
                        <input class="bg-cLightGray font-sans rounded" type="text" name="fullName" id="fullName">
                    </div>
                    
                </div>


            </form>
        </div>
        <div class="w-7/12 bg-bgSpace h-screen relative overflow-hidden">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="">
            <img class="rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="">
        </div>
    </div>
</body>
</html>