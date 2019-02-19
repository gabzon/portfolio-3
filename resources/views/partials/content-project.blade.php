<article @php(post_class())>
  <div class="pv4 bt b--black-10 ph3 ph0-l">
    <div class="row">
      <div class="col-7">
        <h1 class="f3 athelas mt0 lh-title">
          <a href="{{ get_permalink() }}" class="black hover-gray link no-underline">{{ get_the_title() }}</a>
        </h1>
        <p class="lh-copy entry-summary avenir">
          <?php get_the_excerpt() ?>
        </p>
        @php $posttags = get_the_tags(); @endphp
        @if ($posttags)
          @foreach ($posttags as $tag)
            <span class="badge badge-light avenir fw3">{{ $tag->name }}</span>
          @endforeach
        @endif
        <br>
        <br>
        @include('partials/entry-meta')
      </div>
      <div class="col-5">
        @php($img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'))
        <a href="{{ get_permalink() }}" class="black hover-gray link no-underline">
          @if ($img_url)
            <img src="<?php echo $img_url[0];?>" class="img-fluid grow"/>
          @endif
        </a>
      </div>
    </div>

  </div>
</article>
