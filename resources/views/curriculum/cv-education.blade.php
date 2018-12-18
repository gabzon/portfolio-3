<section id="education" class="avenir">
  <br>
  <h2 class="text-center fw1"> <i class="fas fa-graduation-cap"></i> {{ __('Education','sage') }}</h2>
  <hr>
  <div class="row">
    @php( $query = Education::diplomas() )
    @if ( $query->have_posts() )
      @while ( $query->have_posts())
        @php(  $query->the_post() )

        <div class="col-12 col-sm-3 col-md-3 col-lg-3">
          <span class="f5">{{ Education::start_period(get_the_ID()) }} - {{Education::end_period(get_the_ID()) }}</span>
        </div>
        <div class="col-12 col-sm-8 col-md-8 col-lg-8">
          <strong class="f4">{{ the_title() }}</strong><br>
          <a href="{{ get_post_meta(get_the_ID(), 'education_school_website',true) }}" target="_blank" class="text-muted link i">
            {{ get_post_meta(get_the_ID(), 'education_school_name',true) }}
          </a>
          <br>
          <br>
        </div>
        <div class="col-12 col-sm-1 col-md-1 col-lg-1">
          @php( $school_diploma = get_post_meta(get_the_ID(), 'education_diploma') )
          @if ( !empty($school_diploma[0]) )
            @php($img = wp_get_attachment_url(end($school_diploma)))
            <a href="{{ $school_diploma[0] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
              </span>
            </a>

          @endif
          <br>
        </div>
      @endwhile
    @else
      nothing here
    @endif
    @php( wp_reset_postdata() )
  </div>
  <br>
</section>
