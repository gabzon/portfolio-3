<section id="working-experience" class="avenir">
  <br>
  <h2 class="text-center fw1"><i class="fas fa-briefcase"></i> {{ __('Working experience','sage') }}</h2>
  <hr>
  <br>
  @php($query = Job::jobs() )
  @if ( $query->have_posts() )
    <div class="row">
      @while ( $query->have_posts())
        @php(  $query->the_post() )
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <hr>
          @php($id = get_the_ID())

          @if (Job::company_website($id))
            <a href="{{ Job::company_website($id) }}" target="_blank">
              <img src="{{ esc_url(get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail'))}}" alt="" class="img-fluid mb-3">
            </a>
          @endif

          <h4>{{ Job::company_name($id) }}</h4>
          {{ Job::city($id) }}, {{Job::country($id) }}
          <br>
          {{ Job::start_date($id) }} - {{ Job::end_date($id) }}
          <br>
          {{ Job::percentage($id) }}
          <br>
          <br>
        </div>
        <div class="col-12 col-sm-8 col-md-8 col-lg-8">
          <hr class="d-none d-sm-block">
          <h4>{!! get_the_title() !!}</h4>
          @php(the_content())
          <br>
          <br>
        </div>
      @endwhile
    </div>
  @else
    no posts
  @endif
  @php( wp_reset_postdata() )

  <br>
  <br>
</section>
