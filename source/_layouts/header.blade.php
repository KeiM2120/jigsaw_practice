{{-- @extends('_layouts.master') --}}

@section('header')
    <header>
        <p class="headers">This is Header zone</p>

        <nav class="navi">
            <ul>
                <li class=”current”><a href=”#”>Home</a></li>
                <li><a href=”#”>ContentA</a></li>
                <li><a href=”#”>ContentB</a></li>
                <li><a href=“#”>ContentC</a></li>
                <li><a href=”#”>ContentD</a></li>
            </ul>
        </nav> 
    </header> 
@endsection

@section('headerStyle')
    <style>.headers{
        background: yellow;
    }
    </style>

<link rel="stylesheet" href="assets/build/css/header.css">
@endsection