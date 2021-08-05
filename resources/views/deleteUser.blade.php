<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Account | BNCC Launching</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center m-0 p-0">

    <div class="bg-white rounded border border-solid m-4 mt-8 p-4" style="width:24rem; max-width:calc(100% - 2rem); border-color:rgb(209, 213, 219);">
        @foreach ($errors->all() as $error)
        <div class="bg-white border border-solid border-red-500 mt-2 p-2 bg-red-100 text-red-500">
            Error: {{$error}}
        </div>
        @endforeach

        <p class="text-2xl my-4">Delete Account</p>
        <p class="my-4">Your account named "<b>{{$user->fullName}}</b>" and emailed with "<b>{{$user->email}}</b>" would be deleted. This action would effect <b>permanently</b> and cannot be <b>undone</b>. Make sure you delete a correct account and mindful with your action.</p>
        <p class="my-4">Confirm your account</p>
        <form action="{{route("deleteUser")}}" method="post">
            @csrf
            @method("DELETE")
            <div>
                <p>Email</p>
                <input type="text" name="email">
            </div>
            <div>
                <p>Password</p>
                <input type="password" name="password">
            </div>
            <p class="my-4">Confirm you have a right to do this.</p>
            <div>
                <p>Passcode</p>
                <input type="password" name="passcode">
            </div>
            <div class="flex flex-row-reverse mt-4">
                <button class="bg-red-500 text-white px-4 py-2 rounded">Delete My Account</button>
            </div>
        </form>
    </div>

</body>
</html>
