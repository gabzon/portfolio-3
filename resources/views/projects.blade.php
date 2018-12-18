{{--
Template Name: Portfolio
--}}

@extends('layouts.app')

@php
// WP_Query arguments
$args = [
  'post_type'       => 'project',
  'posts_per_page'  => -1
];

// The Query
//$projects = new WP_Query( $args );
$projects = Project::projects()
@endphp


@section('content')

  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}

    @include('partials.content-page')
  @endwhile

  @include('portfolio.grid')
  <br>
  @include('portfolio.drafts')

  {{-- Restore original Post Data --}}
  @php( wp_reset_postdata() )
@endsection
