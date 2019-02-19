@php $count = 0; @endphp

<section class="avenir">
  <h2 class="fw1">Configuration Checklist</h2>
  <br>
  <div class="row">
    <div class="col-12 col-sm-10 col-md-11 col-lg-2 b ttu">Activity</div>
    <div class="col-12 col-sm-2 col-md-1 col-lg-1 b ttu">Time</div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-9 b ttu">
      Description
    </div>
  </div>

  <ol class="pa0">
    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Setup Domain & Hosting</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">60m @php($count += 60)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          The domain must point to the right hosting. Configure DNS and Name Servers. Verify Host is Wordpress expert:
          <ul>
            <li><a href="https://www.infomaniak.ch" target="_blank">Infomaniak</a></li>
            <li><a href="https://www.hostinger.com" target="_blank">Hostinger</a></li>
            <li><a href="https://www.kreativmedia.ch" target="_blank">Kreativmedia</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Set Logins & Passwords</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Create, save and organize login/passwords for the Hosting - MySQL - FTP - Wordpress Website in LastPass <br>
          Refrain from using admin/admin as admin login/password. Alternatively, you may follow these examples: <br>
          <br>
          <strong>For MySQL and FTP</strong>
          <ul>
            <li>Username- CMW (e.g.)</li>
            <li>Password - You can generate your password <a href="https://passwordsgenerator.net/" target="_blank">here</a> </li>
          </ul>
          <br>
          <strong>For Wordpress</strong>
          <ul>
            <li>You may also use your email as login with <a href="https://wordpress.org/plugins/wp-email-login/" target="_blank">WP Email Login Plugin</a>.</li>
            <li>You may donwload and configure <a href="https://auth0.com/wordpress" target="_blank">Auth0</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Install SSL</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Install Let's encrypt
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Pick the Right Directory</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Choose a directory and install the ﬁles under <code>public_html</code>, <code>www</code> or <code>project_name</code>.
          Make sure you do not use ‘root’ or ‘WordPress.’ <br>
          For basic installation use hosting default wordpress installation<br>
          For Pro installation use <a href="https://roots.io/bedrock/docs/installing-bedrock/" target="_blank">Roots Bedrock</a><br>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Change DB Table names (prefix)</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use random letters/numbers_table names instead of the default wp_table names. <br>
          If the website is already created Checkout Change (DB Preﬁx Plugin)
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Enable debug mode</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Enable the debug mode <code>define( 'WP_DEBUG', true );</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Hide your Website from Search Engines</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Make sure you hide your website from the search engines by checking the option under: <br>
          <code>Settings > Reading > Discourage search engines from indexing this site</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Comming soon page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Create a “Coming Soon” page with the free <a href="https://wordpress.org/plugins/coming-soon/" target="_blank">SeedProd Coming Soon</a> or <a href="https://wordpress.org/plugins/wp-maintenance-mode/" target="_blank">WP Maintenance Mode Plugins</a>.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Set General Defaults</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Under <code>Settings > General</code>.
          <ul class="pa0">
            <li>Set WP <i>Title</i>, Very important to update the blog title appropriately</li>
            <li>Set <i>Tagline</i>, The tagline is like the mantra of the website, it resumes what the website is about in a sentence</li>
            <li>Set Default Date & Time, update the Time Zone</li>
            <li>Choose a www or non-www URL for the WordPress as well as Site address</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Change Media Settings</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul class="pa0">
            <li>Change Thumbnail size width to 300</li>
            <li>Change Medium size width to 600</li>
            <li>Delete Height in Thumbnail size, Medium size and Large size</li>
            <li>Under <code>Settings > Media</code>, uncheck the <i>“Organize my uploads into month- and year-based folders”</i> option</li>
          </ul>
          <i>Be aware that large sites with 1000’s of images will make this folder very heavy. if you would like to save all the images under ‘uploads’ folder.</i>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Change Blog Category</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Similarly, under <code>Posts > Categories</code>, rename the ‘uncategorized’ to set up a default category for Posts.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Lock Down Your Demo Site</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Increase the security for your demo website by installing the <a href="https://wordpress.org/plugins/password-protected/" target="_blank">Password Protected</a> plugin.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Delete Sample Conﬁg File</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Finally, don’t forget to remove the sample conﬁg ﬁle, <code>wp-conﬁg-sample.php</code> in your root directory, under <code>public_html</code>, <code>www</code> or <code>project_name</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Remove Default Content</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check that you have removed the WordPress default content such as:
          <ul>
            <li>Post: "hello World"</li>
            <li>Page: "Sample page"</li>
            <li>Comments: "First comment"</li>
            <li>etc</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Disable user registration</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          To disable this option go to <code>Settings > General > anyone can register</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Change discussion settings</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Do you want anyone to comment on your posts? Perhaps you only want members to comment? <br>Change settings here <code>Settings > Discussion</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Set friendly permalinks</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Configure friendly permalinks under <code>Settings > Permalinks > Post name</code>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Consider adding a privacy policy and term and conditions</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Make sure you have a basic privacy policy page as well as terms and conditions
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
