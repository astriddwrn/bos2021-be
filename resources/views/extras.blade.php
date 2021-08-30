<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extras (For Debugging Only) | BNCC Launching</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        table{
            width: 100%;
        }
        table tbody{
            widows: 100%;
        }
        table tbody td{
            max-width: calc(100% - 10rem);
            word-break:break-all;
        }
    </style>
</head>
<body class="p-0 m-0 bg-gray-100">
    <div class="w-11/12 md:w-9/12 lg:w-2/4 mx-auto">
        <div class="bg-gray-300 p-4 my-4 max-w-full">
            This page is purposed for debugging only. Please use this page carefully and use this page when you really need it.
        </div>

        <div class="rounded shadow my-4 bg-white">
            <div class="p-4 bg-gray-50 border-b border-gray-200">
                Request Header & Configurations
            </div>
            <div class="p-4">
                <table>
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Socket IP</td>
                            <td>{{$request->ip()}}</td>
                        </tr>
                        <tr>
                            <td>Current Time</td>
                            <td>{{ Carbon\Carbon::now() }}</td>
                        </tr>
                        <tr>
                            <td>Current Time (GMT+7)</td>
                            <td>{{ Carbon\Carbon::now('GMT+7') }}</td>
                        </tr>

                        <tr>
                            <td>###############</td>
                            <td>##############################</td>
                        </tr>


                        @foreach ($request->header() as $hkey => $harr)
                            @foreach ($harr as $hval)
                                <tr>
                                    <td>{{$hkey}}</td>
                                    <td style="max-width:40rem;">{{$hval}}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
</body>
</html>
