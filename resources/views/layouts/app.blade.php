<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Admin Dashboard | BNCC Launching</title>
        <link id="favicon" rel="shortcut icon" type="image/png" href="{{ asset('Asset/Image/favicon.png') }}" />
        <meta name="title" content="BNCC Launching">
        <meta name="description" content="BNCC (Bina Nusantara Computer Club) is one of the best technology-based organizations at Binus University. Want to be part of us? Register now!">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/userDashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">

    </head>
    <body class="text-base">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @livewireScripts
    </body>
</html>
