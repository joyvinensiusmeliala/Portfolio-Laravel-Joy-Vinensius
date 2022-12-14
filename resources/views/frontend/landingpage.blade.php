@extends('frontend.layouts.master')

@section('title','iPortfolio')

{{--  Start of Content   --}}
@section('main-content')


@include('frontend.pages.about')
@include('frontend.pages.education')
{{--  @include('frontend.pages.services')  --}}
@include('frontend.pages.values')
@include('frontend.pages.counts')
@include('frontend.pages.softskill')
{{--  @include('frontend.pages.skills')  --}}
@include('frontend.pages.skill-programming')
@include('frontend.pages.other-skill')
@include('frontend.pages.experiences')
@include('frontend.pages.clients')
@include('frontend.pages.portfolio')
@include('frontend.pages.project')
@include('frontend.pages.certificate')
@include('frontend.pages.contact')
{{--  @extends('frontend.pages.experiences')  --}}

@endsection

{{--  End of Content   --}}