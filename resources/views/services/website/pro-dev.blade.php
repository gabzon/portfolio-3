@php $count = 0; @endphp
<section class="pro avenir">
  <h2 class="fw1">Pro checklist</h2>
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
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Install Sage Theme</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">20m @php($count += 20)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Install and configure <a href="https://github.com/roots/sage" target="_blank">Sage Roots</a> theme + Commit and push Git <br>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Install TGM Activation plugin</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Install and configure the <a href="http://tgmpluginactivation.com/">TGM Activation</a> plugin to the sage roots theme <br>
          Create the folder <code>inc</code> and place it in <code>app</code>. <br>
          Copy the file from the tgm plugin activation zip <code>class-tgm-plugin-activation.php</code> in the <code>inc</code> folder
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Plugins to install and activate</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3">
              <ul class="pa0 ma0">
                <li><a href="https://wordpress.org/plugins/broken-link-checker/" target="_blank">Broken Link Checker</a></li>
                <li><a href="https://wordpress.org/plugins/wp-optimize/" target="_blank">WP-Optimize</a></li>
                <li><a href="https://auth0.com/wordpress" target="_blank">Auth0</a></li>
                <li><a href="https://wordpress.org/plugins/wp-super-cache/" target="_blank">WP Super Cache</a></li>
                <li><a href="https://wordpress.org/plugins/block-bad-queries/" target="_blank">BBQ: Block Bad Queries</a></li>
                <li><a href="https://wordpress.org/plugins/kirki/" target="_blank">Kirki</a> </li>
              </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3">
              <ul class="pa0 ma0">
                <li><a href="https://wordpress.org/plugins/autodescription/" target="_blank">The SEO Framework</a></li>
                <li><a href="https://wordpress.org/plugins/wp-statistics/" target="_blank">WP Statistics</a></li>
                <li><a href="https://wordpress.org/plugins/redirection/" target="_blank">Redirection</a></li>
                <li><a href="https://wordpress.org/plugins/google-analytics-dashboard-for-wp/" target="_blank">Google Analytics</a></li>
                <li><a href="https://wordpress.org/plugins/coming-soon/" target="_blank">SeedProd Coming Soon</a></li>
                <li><a href="https://wordpress.org/plugins/wp-smushit/" target="_blank">WP Smush it</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3">
              <ul class="pa0 ma0">
                <li><a href="https://wordpress.org/plugins/updraftplus/" target="_blank">UpdraftPlus</a></li>
                <li><a href="https://wordpress.org/plugins/jetpack/" target="_blank">JetPack</a></li>
                <li><a href="https://wordpress.org/plugins/piklist/" target="_blank">Piklist</a></li>
                <li><a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7</a></li>
                <li><a href="https://wordpress.org/plugins/backwpup/" target="_blank">WP Backup to Dropbox</a></li>
                <li><a href="https://wordpress.org/plugins/white-label-cms/" target="_blank">White Label CMS</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3">
              <ul class="pa0 ma0">
                <li><a href="https://wordpress.org/plugins/error-log-monitor/" target="_blank">Error Log Monitor</a></li>
                <li><a href="https://wordpress.org/plugins/revision-control/" target="_blank">Revision Control</a></li>
                <li><a href="https://wordpress.org/plugins/better-wp-security/" target="_blank">iThemes Security</a></li>
                <li><a href="https://wordpress.org/plugins/wp-pagenavi/" target="_blank">WP PageNavi</a></li>
                <li><a href="https://wordpress.org/plugins/cache-enabler/" target="_blank">Cache Enabler</a></li>
                <li><a href="https://wppusher.com/" target="_blank">WP Pusher</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Add Favicon</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          In the customiser or Add custom Favicon using Custom Favicon plugin. (Resolution 512x 512)
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Install tachyons</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Add taychions to the head of the html or enqueue in wordpress. <br>
          How to enqueue CDN styles <a href="https://github.com/roots/sage/issues/1549#issuecomment-145720358" target="_blank">Tutorial</a> <br>
          Checkout their lastest version <a href="https://tachyons.io/" target="_blank">Tachyons</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Install FontAwesome</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Add font-awesome to the head of the html or enqueue in wordpress. <br>
          How to enqueue CDN scripts <a href="https://github.com/roots/sage/issues/1549#issuecomment-145720358" target="_blank">Tutorial</a> <br>
          Checkout their lastest version <a href="https://fontawesome.com/start" target="_blank">font-awesome</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create header navigation</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">30m @php($count += 30)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Create a responsive design for the main menu of the website based on the client’s sitemap  <br>
          For top menu bar use: <a href="https://getbootstrap.com/docs/4.0/components/navbar/">Bootstrap navbar</a><br>
          You need to add <code>walker.php</code> file in the <code>app</code> repertory. Checkout this <a href="https://gist.github.com/smutek/cd95c8bc4f1db70ee1eda2740bfbf6fd" target="_blank">link</a> <br><br>

          <script src="https://gist.github.com/gabzon/56422d7c2a581240c9cfc966601c6cc1.js"></script>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Link Logo</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Link the company logo to the Homepage, ask for a SVG logo
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create Footer</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">30m @php($count += 30)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Create footer with logo, address, phone and social buttons
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Add Social Icons</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">20m @php($count += 20)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Add social media icons/links for Facebook, Twitter, Google+, Pinterest, LinkedIn, etc. You may use AddThis, ShareThis or Share Bar Plugins.
          <br><br>
          <script src="https://gist.github.com/gabzon/e506916170720eb7594cf59d369a731f.js"></script>
          <br>
          Social icons: <br>
          <span class="badge badge-info"><code class="white">fa-facebook-f</code></span>
          <span class="badge badge-info"><code class="white">fa-google-plus-g</code></span>
          <span class="badge badge-info"><code class="white">fa-vimeo-v</code></span>
          <span class="badge badge-info"><code class="white">fa-github-alt</code></span>
          <span class="badge badge-info"><code class="white">fa-pinterest-p</code></span>
          <span class="badge badge-info"><code class="white">fa-twitter</code></span>
          <span class="badge badge-info"><code class="white">fa-instagram</code></span>
          <span class="badge badge-info"><code class="white">fa-youtube</code></span>
          <span class="badge badge-info"><code class="white">fa-linkedin</code></span>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Use Breadcrumb</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Don’t forget to use Breadcrumbs for easy navigation. It’s a part of WordPress SEO by Yoast Plugin
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Clear trash</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Open to the <code>wp-config.php</code> file and copy this code at the bottom of the file<br>
          <code>define('EMPTY_TRASH_DAYS',10);</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Increase Memory Limit</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Open to the <code>wp-config.php</code> file and copy this code at the bottom of the file<br>
          <code>define(‘WP_MEMORY_LIMIT','128M');</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Use Gravatars</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check that the User Avatars or Gravatars are displayed properly
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Add Tags & Media</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Once you’ve added the blog categories, include suitable posts, tags and media ﬁles.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Update Menu</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Update the navigation menu according to the client's sitemap under the <code>Appearances > Menu</code> section.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create Homepage</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">60m @php($count += 60)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ol>
            <li>Create homepage template called "Homepage"</li>
            <li>Create a wordpress page called <code>Home</code></li>
            <li>Set the <code>Homepage</code> template as default template</li>
            <li>Set it as landing page under wordpress settings <code>Settings / reading</code></li>
            <li>Design and Develop the homepage</li>
          </ol>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create About page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">30m @php($count += 30)
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Desing and develop the About page
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Products/Services page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">60m @php($count += 60)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Design and develop page of products and/or services
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create Contact page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">60m @php($count += 60)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Design and develop contact page. it should include:
          <ul>
            <li>Address</li>
            <li>Phone number</li>
            <li>Fax (if any)</li>
            <li>Email address</li>
            <li>Google maps</li>
            <li>Social links (Facebook, Twitter, Linkedin, Google+, Instagram)</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Create 404 Page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">20m @php($count += 20)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Ensure that the 404 page is created and customized. Though most themes have a default page for content that can’tbe found, you should also consider setting up a custom 404 error page.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Add Blog Categories</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Add appropriate blog default categories according to client's wishes (minimum 5) <br>
          Under <code>Posts > Categories</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Style Sticky Post</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">20m @php($count += 20)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Style the sticky posts well and make sure they function well
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Highlight Author’s Comments</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Ensure that the author comment is highlighted differently
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check22">
          <span class="task">Add Comment Closed Message</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          The comments display form is replaced with a “Comments Off” message or something similar.
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
