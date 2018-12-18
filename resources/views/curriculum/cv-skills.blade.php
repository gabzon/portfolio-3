@php
$personal_skills = $theme_options['personal_skills'];
$computer_skills = $theme_options['computer_skills'];
@endphp
<section id="personal-skills" class="avenir">
  <br>
  <div class="row">
    <div id="personal-skills" class="col-12 col-sm-6 col-md-6 col-lg-6">

      @if (  count($personal_skills) > 0 )
        <h2 class="fw1"><i class="fas fa-child"></i> {{ __('Personal Skills','sage') }}</h2>
        <hr>
        @for ($i=0; $i < count($personal_skills); $i++)
          <strong>{{ $personal_skills[$i]['personal_skill_title'] }}</strong>
          <br>
          @php
          echo $personal_skills[$i]['personal_skill_content'];
          @endphp
          <br>
          <br>
        @endfor
      @endif
    </div>
    <div id="computer-skills" class="col-12 col-sm-6 col-md-6 col-lg-6">
      @if ( count($computer_skills) > 0 )
        <h2 class="fw1 avenir"><i class="fas fa-desktop"></i> {{ __('Computer Skills','sage') }}</h2>
        <hr>
        @for ($i=0; $i < count($computer_skills); $i++)
          <strong>{{ $computer_skills[$i]['computer_skill_title'] }}</strong><br>
          @php
          echo $computer_skills[$i]['computer_skill_content'];
          @endphp
          <br>
        @endfor
      @endif
    </div>
  </div>
  <br>
</section>
