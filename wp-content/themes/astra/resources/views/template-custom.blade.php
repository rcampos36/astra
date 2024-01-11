{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('blocks.featured-client-block')
    @include('blocks.client-block')
    @include('blocks.about-block')
    @include('blocks.callout-block')
    @include('blocks.our-services-block')
    @include('blocks.contact-us-block')
  @endwhile
@endsection
