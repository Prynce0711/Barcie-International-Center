<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcie International Center</title>
    <link rel="icon" type="image/x-icon" href="/imageBg/barcie_logo.jpg">
    <img src="" alt="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body data-theme="barcie" class="antialiased">
    @include('Components.Landing.Header')
    @include('Components.Landing.Hero')
    @include('Components.Landing.About')
    @include('Components.Landing.Foundation')
</body>


{{-- Footer --}}
@include('Footer')




</html>