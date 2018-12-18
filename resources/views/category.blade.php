@extends('layouts.app')

@section('content')
  <section class="mw7 center">
    @include('partials.page-header')

    @php
    $cat_title = single_cat_title('',false);
    $projects = Project::category_projects($cat_title);
    @endphp

    @if (!$projects->have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif


    @while ($projects->have_posts()) @php($projects->the_post())
      @include('partials.content-'.get_post_type())
    @endwhile
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
