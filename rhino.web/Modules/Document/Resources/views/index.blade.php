@extends('document::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('document.name') !!}
    </p>

    <div id="app">
        <App></App>
    </div>
@stop
