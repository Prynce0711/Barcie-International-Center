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


<body data-theme="barcie" class="antialiased landing-bg">

    <style>
        body.landing-bg{
            background-image: url('/Lobby/BarCIE-9.1.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    @include('Components.Landing.Header')
    @include('Components.Landing.Hero')
    @include('Components.Landing.About')
    @include('Components.Landing.Foundation')
    {{--TODO: News & Updates --}}
    @include('Components.Landing.EventStylist')
    @include('Components.Landing.PartnerCatering')
   
</body>


{{-- Footer --}}
@include('Footer')




</html>