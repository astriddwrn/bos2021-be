<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="flex flex-row font-sans">
        <div class="w-5/12 h-screen flex flex-col items-center">
            <a href="#"><img class="mt-20" src="{{url('./Asset/Image/auth/logo.svg')}}" alt=""></a>

            <form action="" class="w-8/12 relative" method="post">
                <div class="login-sec absoluute w-full section">
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Email</div>
                        <input class="w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="email" name="login-email" id="login-email" placeholder="example@binus.ac.id">
                        <span class="msg-error"></span>
                    </div>
                    <div class="mt-11">
                        <div class="text-cDarkBlue font-sans font-medium w-100 text-2xl">Password</div>
                        <input class=" w-full bg-cLightGray font-sans rounded p-2 text-xl my-1" type="password" id="login-password" name="login-password" placeholder="Example123">
                        <span class="msg-error"></span>
                    </div>

                    <div class="text-xl text-center mt-8"><a href=""><span class="text-cLightBlue">Forgot your password?</span></a></div>

                    <div class="w-100">
                        <div class="text-center btn-continue text-cWhite font-bold text-xl rounded p-2 bg-cLightBlue w-100 mt-8 mb-5 hover:bg-cDarkerLightBlue transition duration-300 ease-in-out cursor-pointer shadow-bsBtn ">Login</div>                     
                    </div>
                
                    
                    <div class="info text-xl w-full text-center mb-20"><span class="text-cDarkBlue mr-2">Not registered yet?</span><a href=""><span class="text-cLightBlue">Register here</span></a></div>
                
                </div>

            </form>
        </div>
        <div class="w-7/12 h-screen bg-bgSpace h-screen overflow-hidden fixed right-0">
            <img class="stars absolute z-1 w-screen h-screen" src="{{url('./Asset/Image/auth/bg-stars.svg')}}" alt="">
            <img class="rocket absolute z-2" src="{{url('./Asset/Image/auth/rocket.svg')}}" alt="">
        </div>
    </div>

    <script src="{{url('./js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('./js/auth.js')}}"></script>
</body>
</html>