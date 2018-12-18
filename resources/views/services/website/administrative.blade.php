@php $count = 0; @endphp
<section class="avenir" id="admin">
  <h2 class="avenir fw1">Administrative checklist</h2>
  <br>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-2 col-lg-2 b ttu">Activity</div>
    <div class="col-12 col-sm-6 col-md-1 col-lg-1 b ttu">Time</div>
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 b ttu">
      Description
    </div>
  </div>

  <ol class="pa0">
    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Meetings</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">180m @php($count += 180)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Between 1-3 meetings minimum. Discussion to define package and options as well as defining the hosting, styles and deadlines
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Request Content</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Email requesting content -Title<br>
          <ul>
            <li>Hosting Access (server/login/password)</li>
            <li>FTP access (server/login/password)</li>
            <li>Tagline </li>
            <li>Prefered language</li>
            <li>Date/time</li>
            <li>List of users</li>
            <li>Sitemap </li>
            <li>Page titles</li>
            <li>Page content</li>
            <li>Images (1920x1080 or preferred format)</li>
            <li>allowed comments?</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Billing</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">60m @php($count += 60)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          At least 2 emails must be sent 1) Contract + Account 2) Final Bill
        </div>
      </div>
    </li>
  </ol>

  <div class="bt mv3"></div>
  <div class="row">
    <div class="col-6 col-sm-8 col-md-8 col-lg-2 b">Total Time</div>
    <div class="col-3 col-sm-2 col-md-2 col-lg-1 b">{{$count}} min</div>
    <div class="col-3 col-sm-2 col-md-2 col-lg-9 b tr"><?= date('H:i', mktime(0,$count)); ?></div>
  </div>
</section>
