@php $count = 0; @endphp

<section class="avenir" id="testing">
  <h2 class="fw1">Testing checklist</h2>
  <br>
  <div class="row">
    <div class="col-12 col-sm-10 col-md-11 col-lg-2 b ttu">Activity</div>
    <div class="col-12 col-sm-2 col-md-1 col-lg-1 b ttu">Time</div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 b ttu">Description</div>
  </div>

  <ol class="pa0">
    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">White Label</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          If you are developing the WordPress website for a client, implement branded WordPress login page using <a href="https://wordpress.org/plugins/white-label-cms/" target="_blank">White Label CMS</a> Plugin.	Launch
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Use Dash for URLS</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Check URL dashes. Make sure to use “-” in your URL’s instead of “_”.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Check for Content Overﬂow</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">15m @php($count += 15)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Make sure there are no posts with pictures that break the content layout or are too big for the content column. In that case, make Overﬂow: Hidden in you CSS.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Check Content Structure</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">20m @php($count += 20)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check the structure and content for everything including pages, categories, URL’s, submission forms, etc.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Update Contact Info</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li>Under <code>Settings > General</code> update the admin email</li>
            <li>Check/update contact info</li>
            <li>Check/update social media links</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Compress Images</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Reduce all the image sizes by almost 50% by compressing the PNG & JPG ﬁles using TinyPNG or <a href="https://wordpress.org/plugins/wp-smushit/" target="_blank">WP Smush it</a> plugin.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Latest WP Version</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Make sure you are using the latest version of WordPress. If not, ensure that you upgrade before you go live.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Update Plugins</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          It is also important to upgrade all the plugins on your website before going live.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Implement Security</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Make sure you have all the security in place, like password strength, ﬁles and folder permissions, etc. Use the <a href="https://wordpress.org/plugins/better-wp-security/" target="_blank">iThemes Security</a> plugin.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Disable the Debug mode</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <code>Define('WP_DEBUG',false);</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Check Broken Links</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
            Check if all your external links are working by opening them in new tabs. Use code similar to this for links. It’s essential that you check for broken links on your website before going live.
            Use <a href="https://wordpress.org/plugins/broken-link-checker/" target="_blank">Broken Link Checker</a> Plugin

        </div>
      </div>
    </li>


    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test Social Buttons</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Check whether social sharing is in place, working properly, and includes the right platforms and proﬁles.	Launch
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test Web Forms</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Make sure all forms on your site (contact, order,,etc.) are submitting data correctly and that form emails are sent to the right places
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="defaultCheck1">
          <span class="task">Test Out Feeds</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          If you have RSS, news, social, or other feeds on your WordPress site, ensure they are working as they are supposed to before site launch.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test Search Page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check if the search page is accessible to users. You can check by navigating to <code>http://yoursite.com/?s=Test</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test Cross Browswer Compatibility</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Ensure your website has basic cross browser compatibility.
        </div>
      </div>
    </li>


    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test for Responsiveness</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Test your website is mobile friendly. Run <a href="https://search.google.com/test/mobile-friendly" target="_blank">Google’s Mobile Friendly Test</a> to determine the responsiveness
        </div>
      </div>
    </li>


    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Test 3rd Party Tools</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          If you’re using external tools for CRM, ecom, marketing, or something else, double check that they are present on-site and working correctly.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Check Loading Speed</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Improve the page loading speed by using <a href="https://developers.google.com/speed/pagespeed/insights/" target="_blank">Google’s Page Speed Insights</a>.
        </div>
      </div>
    </li>


    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Disable Coming Soon Page</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Disable the “Coming Soon” page and unistall the plugin SeedProd
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Enable Site to be Crawled</span>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">
          Uncheck the option under <code>Settings > Reading > “Discourage search engines from indexing this site”</code> and make website visible to search engines.
        </div>
      </div>
    </li>


    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Setup Backups</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Once your website is launched, its vital that you take regular back-ups. Use free plugins to back-up like: BackUpWordPress & <a href="https://wordpress.org/plugins/backwpup/">WordPress Backup to Dropbox</a>.
        </div>
      </div>
    </li>
  </ol>


  <div class="bt mv3"></div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-2 col-lg-2 b">Total Time</div>
    <div class="col-12 col-sm-12 col-md-2 col-lg-1 b">{{$count}}m</div>
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 b tr"><?= date('H:i', mktime(0,$count)); ?></div>
  </div>

</section>
