<section id="working-experience">
  <br>
  <h2 class="tc fw1"><i class="fas fa-briefcase"></i> {{ __('Portfolio','sage') }}</h2>
  <hr>
  @php($query = Project::projects() )
  @if ( $query->have_posts() )
    <div class="card-columns text-center">
      @while ( $query->have_posts())
        @php(  $query->the_post() )
        @php( $id = get_the_ID() )
        <div class="card grow">
          @php( $image = get_the_post_thumbnail_url($id,'large') )
          @php($links = Project::links($id) )
          @if ($image)
            @if ( $links['website'] )
              <a href="{{ $links['website'] }}" class="link" target="_blank">
                <img class="card-img-top" src="{{ $image }}" alt="Card image cap">
              </a>
            @else
              <img class="card-img-top" src="{{ $image }}" alt="Card image cap">
            @endif
          @endif
          <div class="card-body avenir">
            <h5 class="card-title">{{ get_the_title() }}</h5>
            {{-- <p class="card-text"><small class="text-muted">{{ Project::start_date($id) }} - {{ Project::end_date($id) }}</small></p> --}}
            <p class="card-text"><small class="text-muted">{{ Project::location($id) }}</small></p>
            @php(the_excerpt())

          </div>
          @if ($links['facebook'] || $links['twitter'] || $links['google_plus'] || $links['instagram'] || $links['vimeo'] || $links['pinterest'] || $links['youtube'])
            <div class="card-footer">
              @if ( $links['facebook'] )
                <a href="{{ $links['facebook'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              @endif
              @if ( $links['twitter'] )
                <a href="{{ $links['twitter']}}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              @endif
              @if ( $links['google_plus'] )
                <a href="{{ $links['google_plus'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-google-plus"></i>
                </a>
              @endif
              @if ( $links['instagram'] )
                <a href="{{ $links['instagram'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              @endif
              @if ( $links['youtube'] )
                <a href="{{ $links['youtube'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              @endif
              @if ( $links['pinterest'] )
                <a href="{{ $links['pinterest'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-pinterest"></i>
                </a>
              @endif
              @if ( $links['vimeo'] )
                <a href="{{ $links['vimeo'] }}" class="btn btn-primary btn-circle" target="_blank">
                  <i class="fab fa-vimeo"></i>
                </a>
              @endif
            </div>
          @endif

        </div>
      @endwhile
    </div>
  @else
    no posts
  @endif
  <br>
  <br>
</section>
