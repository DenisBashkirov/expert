@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.home.title-screen')
    @include('frontend.pages.home.services')
    @include('frontend.sections.consult')
    @include('frontend.pages.home.text')
    @include('frontend.sections.experts')
    @include('frontend.pages.home.clients')

@endsection
