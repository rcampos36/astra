{{--
  Template Name: Custom Portfolio Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('blocks.portfolio-block')
    @include('blocks.callout-block')
    @include('blocks.contact-us-block')
  @endwhile
@endsection
