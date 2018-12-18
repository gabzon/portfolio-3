{{--
Template Name: Curriculum
--}}

@extends('layouts.fullwidth')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
  @endwhile
  @php( wp_reset_postdata() )

  <?php
  /**
  * Template Name: Curriculum
  */
  $theme_options = get_option('my_theme_settings');
  $languages = $theme_options['languages'];
  $driving_license = $theme_options['driving_license'];
  $marital_status = $theme_options['marital_status'];
  $args_school = array( 'post_type' => 'education' , 'numberposts'=> -1);
  $args_job = array( 'post_type' => 'jobs' , 'numberposts'=> -1);
  $args_project = array( 'post_type' => 'projects' , 'numberposts'=> -1 );
  $schools = get_posts( $args_school );
  $jobs = get_posts( $args_job );
  ?>

  <div id="curriculum">
    @include('curriculum.cv-header')
    <br>
    <div class="container">
      {{-- @include('curriculum.cv-projects') --}}
      {{-- <br> --}}
      @include('curriculum.cv-jobs')
      <br>
      @include('curriculum.cv-education')
      <br>
      @include('curriculum.cv-skills')
      <br>
      @include('curriculum.cv-interest')
      <br>
    </div>
  </div>
  {{-- <div id="root"></div> --}}
@endsection
