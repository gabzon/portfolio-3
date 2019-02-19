@extends('layouts.app')

@section('content')
  <section class="container">
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

    <div class="card-columns">
      @while ($projects->have_posts()) @php($projects->the_post())
        <div class="card grow hide-child mb-3">
          @if (get_the_post_thumbnail_url($projects->get_post_ID(),'post-thumbnail'))
            <img src="{{ get_the_post_thumbnail_url($projects->get_post_ID(),'post-thumbnail') }}" class="card-img-top img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @else
            <img src="http://mrmrs.github.io/photos/cpu.jpg" class="card-img-top img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @endif
          <div class="card-img-overlay hover-bg-black-70 child">
            <span class="card-title f5 white b media-title">@php( the_title() )</span><br>
            @foreach ((get_the_category()) as $cat)
              @if (!(strtoupper($cat->name) == 'SERVICE EXCHANGE'))
                <span class="avenir f6 ttu white">{{ $cat->name }}</span>
              @endif
            @endforeach
            <br>
            <i class="f6 fw1 white">{{ get_post_meta(get_the_ID(),'project_tagline', true) }}</i>

            <div class="media-buttons" style="position:absolute; bottom:10px;">
              <a href="{{ get_post_meta(get_the_ID(), 'project_website', true) }}" class="btn btn-outline-light btn-sm" target="_blank">
                <i class="fas fa-globe"></i>
              </a>
              <a href="{{ get_the_permalink() }}" class="btn btn-outline-light btn-sm" target="_blank">
                <i class="fas fa-info-circle"></i>
              </a>
            </div>
            <?php $tags = get_the_tags(); ?>
            @if ($tags)
              @foreach ($tags as $tag)
                <span class="badge badge-light invisible">{{  $tag->name }}</span>
              @endforeach
            @endif
          </div>
        </div>
      @endwhile
    </div>
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
