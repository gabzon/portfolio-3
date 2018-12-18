@php $count = 0; @endphp
<section class="avenir" id="security">
  <h2 class="avenir fw1">Security checklist</h2>
  <br>

  <div class="row">
    <div class="col-12 col-sm-6 col-md-2 col-lg-2 b ttu">Activity</div>
    <div class="col-12 col-sm-6 col-md-1 col-lg-1 b ttu">Time</div>
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 b ttu">Description</div>
  </div>

  <ol class="pa0">

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Doble factor authentication</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Activate 2 factor authentication
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Force email login</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use email address to login instead of username
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Rename login page</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Rename the URL of your login page
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Limit Suspicious Login Attempts</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use Limit Login Attempts or Login LockDown Plugins to limit the number of login attempts possible both through normal login and using auth cookies.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Force strong passwords</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use a strong password contaning uppercase, lowercase, numbers, and special characters on all accounts
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Passwords update</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Change the passwords regularly
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Protect the folder wp-admin</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Password protect the folder wp-admin
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Implement SSL</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Implement SSL for the WordPress admin section
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">DB strong users and passwords</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use a strong password contaning uppercase, lowercase, numbers, and special characters for the database user
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Secure your wp-conﬁg ﬁle</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Wp-conﬁg.php ﬁle contains a lot of conﬁdential details of your site, so it’s vital that you protect it with your life! The way to protect this ﬁle is to simply place the following code in your .htaccess ﬁle on your server.
          <files wp-config.php>
            order allow,deny
            deny from all
          </files>"
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Segregate Your WP Databases</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Segregate Your WordPress Databases in case of multiple websites in the same hosting
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Secure Connection to host</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Connect to your server only through SFTP or SSH
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Protect important files</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Remove or block via .htaccess the files license.txt, wp-config-sample.php, and readme.html
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Folders permissions</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Set all folder permission to 755 and files to 644
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Keep WordPress up-to-date</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Keep wordpress, theme and plugins updated
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Delete admin account</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Do not create an account with username admin. If there is any, create a new Administrator account and delete the old one
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Create an Editor Role Account</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Create an Editor account and use it solely to publish content
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Enable Google Search console</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Enable Google Search console
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Delete and remove unused themes and plugins</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Delete and remove unused themes and plugins
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Verify themes & plugin sources</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Download and use themes only from reputable sources
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Scan your website</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Scan the website for viruses, malware, and security breaches
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Monitor your website</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Install any plugins to check file changes
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Performance</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Get regular and up to date reports of your website’s performance with this handy plugin – Plugin Performance Proﬁler Plugin.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">iThemes Security</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          The most comprehensive, watertight security plugin around is, iThemes Security plugin. It’s free and takes care of almost all the security issues on a website.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Block Directory Access</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          To prevent access to all directories, you need to place this code inside your .htaccess ﬁle.
          # Prevent folder browsing
          Options All -Indexes
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Change the default table prefix</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Change the default table prefix, instead of wp_
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Delete Install & Upgrade Files</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Be sure to delete /wp-admin/install.php and /wp-admin/upgrade.php after every WordPress installation or upgrade.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Disable Theme and Plugin Editor</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          If you want to stop the editor links from appearing in the admin area you can add the following to your wp-conﬁg.php ﬁle so people cannot edit the theme directly in the admin area.
          define('DISALLOW_FILE_EDIT',true);
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Hide your WordPress Version</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          It is important that you hide your current WordPress Version from the hackers. Add the following code to your function.php
          function remove_version() {return “;}
          add_filter("the_generator",'remove_version');
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Disable PHP Execution</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">

        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Disable XML-RPC</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Disable XML-RPC (If You Aren’t Using It)
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Hide Login Error messages</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Error login messages may expose your website and give hackers an idea if they’ve gotten username correct/incorrect, vice versa. It is wise to hide it from unauthorized login. To hide login error messages, simply put the following code in functions.php.
          function wrong_login() {
            return ‘Wrong username or password.’;
          }
          add_filter('login_errors','wrong_login');"
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
