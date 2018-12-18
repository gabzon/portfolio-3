<section id="curriculum-header" class="bg-black white p1 avenir">
  <br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-3 col-md-3 col-lg-3 text-center">
        <img src="{{ get_avatar_url( $theme_options['main_email'], ['size' => 500] ) }}" alt="" class="img-fluid rounded-circle img-thumbnail">
        <strong class="f3 text-center">{{ $theme_options['full_name'] }}</strong><br>
        Entrepreneur, Developper, Designer, Filmmaker, Speakers, Creative, Dancer
        <br><br>
      </div>
      <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
      <div class="col-12 col-sm-5 col-md-5 col-lg-5 align-self-center">
        <table class="text-left" width="100%">
          <tr>
            <td class="b ttc" width="30%">Age</td>
            <td>{{ App::age() }}</td>
          </tr>
          <tr>
            <td class="b ttc">Nationality</td>
            <td>{{ $theme_options['nationality'] }}</td>
          </tr>
          @if ($theme_options['main_email'])
            <tr>
              <td class="b ttc">email</td>
              <td>{{ $theme_options['main_email'] }} </td>
            </tr>
          @endif
          @if ($theme_options['main_phone'])
            <tr>
              <td class="b ttc">phone</td>
              <td> {{ $theme_options['main_phone'] }} </td>
            </tr>
          @endif
          <tr>
            <td class="b ttc">Status</td>
            <td class="ttc">{{ $theme_options['marital_status']}}</td>
          </tr>
          <tr>
            <td class="b ttc">Driver Licence</td>
            <td>{{ App::driver_licence() }}</td>
          </tr>
          @if (count($languages) > 0)
            <tr>
              <td class="b ttc">languages</td>
              <td>
                <?php
                foreach ($languages as $l):
                  echo $l['language_acronym'];
                  if ($l != end($languages)):
                    echo ' | ';
                  endif;
                endforeach;
                ?>
              </td>
            </tr>
          @endif
        </table>
        <br>
        <div class="social-media">
          @php($social = App::social() )

          @if ( $social['facebook'] )
            <a href="{{ $social['facebook'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['twitter'] )
            <a href="{{ $social['twitter'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['google_plus'] )
            <a href="{{ $social['google_plus'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-google-plus fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['instagram'] )
            <a href="{{ $social['instagram'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['pinterest'] )
            <a href="{{ $social['pinterest'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-pinterest fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['linkedin'] )
            <a href="{{ $social['linkedin'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['skype'] )
            <a href="{{ $social['skype'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-skype fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['youtube'] )
            <a href="{{ $social['youtube'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif

          @if ( $social['vimeo'] )
            <a href="{{ $social['vimeo'] }}" style="text-decoration:none !important" target="_blank">
              <span class="fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-vimeo fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
  <br>
</section>
