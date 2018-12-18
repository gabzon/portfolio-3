{{--
Template Name: Portfolio Masonry
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
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @php
  $uncategorized = get_cat_ID('uncategorized');
  $se = get_cat_ID('service exchange');
  $we = get_cat_ID('work experience');
  $exc_cat = $uncategorized . ',' . $se . ',' .$we;
  $categories = get_categories( ['orderby' => 'name', 'order'   => 'ASC', 'exclude' => $exc_cat , 'hide_empty' => 1]);
  @endphp
  @foreach ($categories as $cat)
    <a href="{{ get_category_link( $cat->term_id ) }}" class="btn btn-sm btn-light">{{ $cat->name .' ('. $cat->count .')' }}</a>
  @endforeach
  <br>
  <br>
  @include('portfolio.masonry')
  <br>
  @include('portfolio.drafts')
  {{-- Restore original Post Data --}}
  @php( wp_reset_postdata() )
@endsection
