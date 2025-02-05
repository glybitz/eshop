@extends('layout.master')

@section('content')
    @include('layout._slider')

    {{-- @include('layout._productcategory') --}}

    @include('layout._products')

    @include('layout._subscribe')
@endsection
