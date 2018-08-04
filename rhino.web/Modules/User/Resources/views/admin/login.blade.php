@extends("base::dashboard.layouts.main")
@section("content")
    <body>
    <div class="container">
        <div id="app-authorization">
            <Authorization></Authorization>
        </div>

    </div>
    </body>
@stop

@section('scripts')
    <script type="text/javascript" src="{{mix('/js/dashboard.js','/assets')}}"></script>
    <script type="text/javascript" src="{{mix('/js/vue-authorization.js','/assets')}}"></script>
@stop