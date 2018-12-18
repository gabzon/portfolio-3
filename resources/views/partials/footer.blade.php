@php( $theme_options = get_option('my_theme_settings') )
<br>
<footer class="ph3 ph4-ns pv5 bt b--black-10 black-70 content-info">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <a href="mailto:" class="link b f3 f2-ns dim black-70 lh-solid avenir fw1">gab.zambrano@gmail.com</a>
        <br>
        <br>
        @if ($theme_options['main_facebook_link'])
          <a href="{{ esc_url($theme_options['main_facebook_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_gplus_link'])
          <a href="{{ esc_url($theme_options['main_gplus_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_vimeo_link'])
          <a href="{{ esc_url($theme_options['main_vimeo_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-vimeo-v fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_github_link'])
          <a href="{{ esc_url($theme_options['main_github_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-github-alt fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_pinterest_link'])
          <a href="{{ esc_url($theme_options['main_pinterest_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_twitter_link'])
          <a href="{{ esc_url($theme_options['main_twitter_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_instagram_link'])
          <a href="{{ esc_url($theme_options['main_instagram_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_youtube_link'])
          <a href="{{ esc_url($theme_options['main_youtube_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
        @if ($theme_options['main_linkedin_link'])
          <a href="{{ esc_url($theme_options['main_linkedin_link']) }}" style="text-decoration:none !important" target="_blank">
            <span class="fa-stack fa-1x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        @endif
      </div>
      <div class="col-3">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
    </div>
  </div>
</footer>
