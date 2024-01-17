{{--
  Template Name: Custom Services Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('blocks.full-services-block')
    @include('blocks.callout-block')
    @include('blocks.contact-us-block')
  @endwhile
@endsection
