<!DOCTYPE html>
<html>
<head>
    <title>Панель администртора</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href=" {{ mix('/css/app.css','/assets')}} ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="token">
</head>
<body>

@yield('content')
@yield('scripts')

</body>
</html>