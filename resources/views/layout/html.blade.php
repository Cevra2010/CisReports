<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title") | CisReports</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">     <link href="{{ asset("fontawesome-free-6.2.0-web/css/all.css") }}" rel="stylesheet">
    @livewireStyles
    @vite(['resources/js/app.js'])
</head>
    <body class="@stack("body_classes")" style="@stack("body_styles") font-family: 'Nunito', sans-serif;">

        @yield("body")

        @livewireScripts
    </body>
</html>