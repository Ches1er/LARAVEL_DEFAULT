@extends('layouts.default')

@guest
    @include('layouts.menu.menu')
    @else
        @include('layouts.menu.auth_menu')
@endguest

@section('title','Main')
@section('content')
    <nav>@yield("menu")</nav>
    <div class="container">
    <section>
        Something
    </section>
    </div>

    @endsection
