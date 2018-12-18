<section id="old-projects">
  <br>
  <h2 class="f3 fw1">Other old or discontinued projects</h2>
  @php($query = Project::drafts() )
  @if ( $query->have_posts() )
    <div class="badges">
      @while ( $query->have_posts())
        @php(  $query->the_post() )
        @php( $id = get_the_ID() )
        @php( $links = Project::links($id) )
        <a href="{{ $links['website'] }}" target="_blank" class="badge badge-light avenir">{{ get_the_title() }}</a>
      @endwhile
    </div>
  @else
    no posts
  @endif
  <br>
</section>
