@extends('layouts.app')

@section('content')
  <br>
  @include('partials.page-header')
  <br>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="row">
    @while (have_posts()) @php the_post() @endphp
      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        @include('partials.content-'.get_post_type())
      </div>
    @endwhile
  </div>
  <br>
  {{-- https://gist.github.com/mtx-z/f95af6cc6fb562eb1a1540ca715ed928
  option 2 (not used) : https://github.com/talentedaamer/Bootstrap-wordpress-pagination --}}
  <div style="display: flex;align-items: center;justify-content: center;">
    {!! bootstrap_pagination(); !!}
  </div>
@endsection
