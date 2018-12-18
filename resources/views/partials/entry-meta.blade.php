<time class="updated f6 ttu tracked gray" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}
  <span class="byline author vcard">
    - {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
  </span>
</time>
