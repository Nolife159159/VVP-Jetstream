<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <title>404 - Puslapis nerastas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>

<body>
<div class="error-container">
   <img src="{{ asset('img/404.png') }}"/>
   <br><br>
   <span class="text">Ups! Kažkas atsitiko. Norėdami grįžti, paspauskite mygtuką žemiau.</span>
   <br><br>
   <button type="button" class="btn-outline-custom" onclick="location.href='/profile'">Grįžti</button>
</div>
</body>

</html>
<style lang="scss" scoped>
    .btn-outline-custom {
        color: #FFFFFF;
        background: #e3242b;
        text-transform: uppercase;
        border: 1px solid #e3242b;
        text-align: center;
        vertical-align: middle;
        display: inline-block;
        font-weight: 400;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        margin-top: 10px;
    }
    .btn-outline-custom:hover {
         color: #FFFFFF;
         background: #e3242b;
         border-color: #e3242b;
     }
    .text-404 {
        text-align: center;
        color: #0f1118;
        font-size: 245px;
    }
    .error-container {
        text-align: center;
        margin: auto;
        width: 60%;
        padding: 14%;
    }
    .text {
        color: #FFFFFF;
    }
    @media screen and (max-width: 600px) {
        .error-container {
            margin-top: 50%;
            width: unset !important;
            padding: unset !important;
        }
    }
</style>
