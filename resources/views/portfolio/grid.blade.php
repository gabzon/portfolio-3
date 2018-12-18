{{-- The Loop --}}
@if ( $projects->have_posts() )
  <div class="row">
    @while ( $projects->have_posts() )
      @php( $projects->the_post() )
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-5">
        <article class="b--black-10">
          @php
          $link = get_the_permalink();
          $target = '_self';
          @endphp
          @if ( get_post_meta(get_the_ID(), 'project_website', true) )
            @php
            $link =  get_post_meta(get_the_ID(), 'project_website', true);
            $target = '_blank';
            @endphp
          @endif
          <a class="grow no-underline black" href="{{ esc_url( $link )}}" target="_blank">
            @if (get_the_post_thumbnail_url($projects->get_post_ID(),'post-thumbnail'))
              <img src="{{ get_the_post_thumbnail_url($projects->get_post_ID(),'post-thumbnail') }}" class="img-fluid mb-2 grow" alt="Photo of a dimly lit room with a computer interface terminal.">
            @else
              <img src="http://mrmrs.github.io/photos/cpu.jpg" class="db" alt="Photo of a dimly lit room with a computer interface terminal.">
            @endif
          </a>
          <h1 class="f3 avenir mt0 lh-title mt-2 mb0">@php( the_title() )</h1>
          @foreach ((get_the_category()) as $cat)
            <span class="avenir ttu">{{ $cat->name }}</span>
          @endforeach
          <br>
          <i class="text-muted">{{ get_post_meta(get_the_ID(),'project_tagline', true) }}</i>
          <p class="f6 f5-l lh-copy avenir mt-3">
            @php echo get_the_excerpt() @endphp
          </p>
          @php( $tags = get_the_tags() )
          @if ($tags)
            @foreach ($tags as $tag)
              <span class="badge badge-light invisible">{{  $tag->name }}</span>
            @endforeach
          @endif
        </article>

      </div>
    @endwhile
  </div>
@else
  No projects found
@endif

@php
  wp_reset_postdata();
@endphp
