<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Savour - Save the food, save the planet</title>
</head>

<body>
    @include('welcome/navbar')


    @yield('content')



    @include('welcome/footer')
</body>

</html>