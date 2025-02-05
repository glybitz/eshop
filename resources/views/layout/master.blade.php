@extends('layout.base')

@section('main')
    @include('layout._top')

    @include('layout._menu')

    @yield('content')


    @include('layout._footer')

    @include('layout._scripts')
@endsection
