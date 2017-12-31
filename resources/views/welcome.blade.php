<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
        <title>Shopping Cart</title>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header"><h1>Vue Shopping Cart</h1></div>
            <div id="vue"></div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
