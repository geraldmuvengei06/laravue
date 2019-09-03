<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Larauth</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" /> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bulma.min.css') }}">
    </head>
    <body>
        <div id="app">
            
        </div>
        <script>
            var BASE_URL = '{{ URL::to('/') }}';
            var app_name = '{{ env('APP_NAME') }}';
            console.log(app_name)
        </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>


