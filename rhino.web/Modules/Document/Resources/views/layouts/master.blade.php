<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rhino</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('/css/app.css','/assets') }}">
    </head>
    <body>
        @yield('template')
        @yield('scripts')
        <script type="text/javascript" src="{{mix('/js/manifest.js','/assets')}}"></script>
        <script type="text/javascript" src="{{mix('/js/vendor.js','/assets')}}"></script>
        <script type="text/javascript" src="{{mix('/js/app.js','/assets')}}"></script>
    </body>
</html>
