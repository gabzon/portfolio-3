{{--
Template Name: Website
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    <section class="totals">
      @php
      $admin = new Website_Administration();
      //$basic = new Website_Basic();
      //$pro = new Website_Pro();
      //$pro = new Website_Pro();
      //$pro = new Website_Pro();
      @endphp
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <h2 class="tc i fw1 system-serif">Pre-Development</h2>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Administration</h4>
                  <p class="card-text">Billings, meetings and planning</p>
                  <h4 class="f3 fw1">{{$admin->total_hours()}} minutes</h4>
                  <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Configuration</h4>
                  <p class="card-text">Hosting and Wordpress configuration and installation</p>
                  <h4 class="f3 fw1">130 minutes</h4>
                  <p class="card-text"><small class="text-muted">15 tasks</small></p>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <h2 class="tc i fw1 system-serif">Development</h2>
          <div class="row justify-content-md-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic</h4>
                  <p class="card-text">Created with LC Composer or any themes and plugins</p>
                  <h4 class="f3 fw1">280 minutes</h4>
                  <p class="card-text"><small class="text-muted">12 tasks</small></p>
                </div>
              </div>
              <hr>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pro</h4>
                  <p class="card-text">Developed with Sage, piklist, kirki and tailor-made plugins</p>
                  <h4 class="f3 fw1">480 minutes</h4>
                  <p class="card-text"><small class="text-muted">25 tasks</small></p>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <div class="f2 fw1 tc">380 minutes</div>
        </div>
        <div class="col-2">
          <div class="f2 fw1 tc">+</div>
        </div>
        <div class="col-5">
          <div class="row">
            <div class="col-4">
              <div class="f2 fw1 tc dt">280</div>
            </div>
            <div class="col-4">
              <div class="f2 fw1 tc dt">Or</div>
            </div>
            <div class="col-4">
              <div class="f2 fw1 tc dt">480</div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      {{--  ------------------------------------------------------------------}}
      <h2 class="tc i fw1 system-serif">Module Options</h2>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blog</h4>
              <p class="card-text">Blogging option</p>
              <h4 class="f3 fw1">30 minutes</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Search</h4>
              <p class="card-text">Users can search in the blog database</p>
              <h4 class="f3 fw1">60 minutes</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Newsletter</h4>
              <p class="card-text">Newsletter field somewhere in the website</p>
              <h4 class="f3 fw1">60 minutes</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gallery</h4>
              <p class="card-text">Integration of a gallery plugin</p>
              <h4 class="f3 fw1">120 minutes</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Multilanguage</h4>
              <p class="card-text">Capacity to write content in different languages</p>
              <h4 class="f3 fw1">120 minutes</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks</small></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <h2 class="tc i fw1 system-serif">Post-Develpment Options</h2>
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Testing</h4>
              <p class="card-text">Runs different checkup tests to make evaluate the website compliance</p>
              <h4 class="f3 fw1">180 minutes</h4>
              <p class="card-text"><small class="text-muted">22 tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Security</h4>
              <p class="card-text">Hosting and Wordpress configuration and installation</p>
              <h4 class="f3 fw1">300 minutes</h4>
              <p class="card-text"><small class="text-muted">32 tasks</small></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">SEO</h4>
              <p class="card-text">Code and workflow to improve SEO</p>
              <h4 class="f3 fw1">515 minutes</h4>
              <p class="card-text"><small class="text-muted">53 tasks</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <hr>
    <br>
    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-admin-tab" data-toggle="pill" href="#pills-admin" role="tab" aria-controls="pills-admin" aria-selected="true">
          Administration
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-config-tab" data-toggle="pill" href="#pills-config" role="tab" aria-controls="pills-config" aria-selected="false">
          Configuration
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-basic-tab" data-toggle="pill" href="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="false">
          Basic Website
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-pro-tab" data-toggle="pill" href="#pills-pro" role="tab" aria-controls="pills-pro" aria-selected="false">
          Pro Website
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-test-tab" data-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-test" aria-selected="false">
          Testing
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab" aria-controls="pills-seo" aria-selected="false">
          SEO
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-security-tab" data-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">
          Security
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-maintenance-tab" data-toggle="pill" href="#pills-maintenance" role="tab" aria-controls="pills-maintenance" aria-selected="false">
          Maintenance
        </a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
        @include('services.website.administrative')
      </div>
      <div class="tab-pane fade" id="pills-config" role="tabpanel" aria-labelledby="pills-config-tab">
        @include('services.website.config')
      </div>
      <div class="tab-pane fade" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
        @include('services.website.basic-dev')
      </div>
      <div class="tab-pane fade" id="pills-pro" role="tabpanel" aria-labelledby="pills-pro-tab">
        @include('services.website.pro-dev')
      </div>
      <div class="tab-pane fade" id="pills-test" role="tabpanel" aria-labelledby="pills-test-tab">
        @include('services.website.testing')
      </div>
      <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
        @include('services.website.seo')
      </div>
      <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
        @include('services.website.security')
      </div>
      <div class="tab-pane fade" id="pills-maintenance" role="tabpanel" aria-labelledby="pills-maintenance-tab">
        @include('services.website.maintenance')
      </div>
    </div>
    <br>
  @endwhile
@endsection




{{--
<ul class="list-group list-group-flush">
<li class="list-group-item">Configure Website Categories</li>

<ul> --}}

{{--
<br>

<br>--}}




{{-- </ul>
<ul>
<li>Change Sample page to home</li>
<li>Remove default content</li>
<li>Change default uncategorized</li>
<li>Create a Sitemap</li>
<li>Style sticky posts</li>
<li>Use - instead _ for url</li>
<li>Check content overflow</li>
<li>Add blog Categories</li>
<li>Ensure authors comments are hightlighted differently</li>
<li>Add tags and Media</li>
<li>Use Gravatars</li>
<li>Update menu</li>
<li>Close comments</li>
<li>Use alt in images</li>
<li>Create 404 page</li>
<li>Add newsletter subscription</li>
<li>Test search page</li>
<li>Install required plugins (make a list)
<ul>
<li>The SEO Framework</li>
<li>TGM Activation</li>
<li>JetPack</li>
<li>WP Super Cache</li>
<li>Broken link Checker</li>
<li>Wordpress backup to dropbox</li>
<li>Block bad queries</li>
<li>Revision Control</li>
<li>wp-Graphql</li>
<li>Error log monitor</li>
<li>WP Smush it plugin for images</li>
<li>iThemes Security</li>
</ul>
</li>
<li>Add favicon</li>
<li>Add social icons</li>
<li>install tachions</li>
<li>install font-awesome</li>
<li>create header and navbar</li>
<li>Create footer</li>
<li>link logo with home</li>
</ul>

<li>home</li>
<li>About</li>
<li>Products/Services</li>
<li>sub-product page / sub service-page</li>
<li>Contact</li>
<li>Blog</li>
<li>Blog page</li>
<li>sub-pages</li>
<li>404</li>

<h3>additional options</h3>
<li>Translations 200 CHF</li>
<li>Photo galleries</li>
<li>Contact form 50</li> --}}



{{-- options
- search
- blog
- subscription
- Custom Post Types
- cpt templates
- Custom Taxonomies
- taxonomies templates


Pick the Right Directory:
Choose a directory and install the ﬁles under public_html. Make sure you do not use ‘root’ or ‘WordPress.’

Change DB Table names:
Use random letters/numbers_table names instead of the default wp_table names. Checkout Change (DB Preﬁx Plugin)

Use Unique Login/Password:
Refrain from using admin/admin as admin login/password. Alternatively, you may follow these examples;
- Username- CMW (e.g.)
- Password- (Use Strong Password Generator Plugin).
- You may also use your email as login with WP Email Login Plugin.
- or Auth0

Hide your Test Website from Search Engines:
Make sure you hide your website from the search engines by checking the option under Settings > Reading “Discourage search engines from indexing this site”.

Additional Steps:
Once the installation is complete, here are some of the additional things you should do.
- Create a “Coming Soon” page with the free SeedProd Coming Soon or WP Maintenance Mode Plugins.
- Now, you will need to make some changes in the settings under General category.
- Choose a www or non-www URL for the WordPress as well as Site address.

Set Default Date & Time:
Don’t forget to update the Time Zone, Date/Time under Settings > General.

Update Blog Title:
Very important to update the blog title and tag line appropriately under Settings > General.

Change Media Settings:
Under Settings > Media, uncheck the “Organize my uploads into month and year based folders” option if you would like to save all the images under ‘uploads’ folder. Be aware that large sites with 1000’s of images will make this folder very heavy.

Change Blog Category:
Similarly, under Posts > Categories, rename the ‘uncategorized’ to set up a default category for Posts.

Lock Down Your Demo Site:
Increase the security for your demo website by installing the Password Protected plugin.

Delete Sample Conﬁg File:
Finally, don’t forget to remove the sample conﬁg ﬁle, WP-conﬁg-sample.php in your root under public_html.

Additional Steps:
- Enable the debug mode
- Use as many WP default-included third-party JS libraries as possible.
- As the admin, you should be able to upload/remove media and install new plugins as per your requirements.

-----

Remove Default Content:
Check that you have removed the WordPress default content like posts, comments and more.

Create a Sitemap:
Next, create a logical sitemap in Notepad, Word or Excel and add pages like About us, Contact us, etc, according to this sitemap.

Use Dash for URLS:
Make sure to use “-” in your URL’s instead of “_”.

Add Blog Categories:
Under Posts > Categories, add appropriate blog categories.

Add Tags & Media:
Once you’ve added the blog categories, include suitable posts, tags and media ﬁles.

Update Menu:
Then, as per the Sitemap, add Menu under the Appearances > Menu section.

Use ALT Text:
Don’t forget to add alt text to all the website images. You may also use the Search Friendly Images Plugin.

Add Newsletter Subscription:
Include the Email Opt-In Form for newsletter subscription. You may use Newsletter Plugin. We use MailChimp List Subscribe Form Plugin.

Change Blog Category:
Similarly, under Posts > Categories, rename the ‘uncategorized’ to set up a default category for Posts.

Style Sticky Post:
Style the sticky posts well and make sure they function well.

Check for Content Overﬂow:
Make sure there are no posts with pictures that break the content layout or are too big for the content column. In that case, make Overﬂow: Hidden in you CSS.

Highlight Author’s Comments:
Ensure that the author comment is highlighted differently.

Use Gravatars:
Check that the User Avatars or Gravatars are displayed properly.

Add Comment Closed Message:
The comments display form is replaced with a “Comments Off” message or something similar.

Create 404 Page:
Ensure that the 404 page is created and customized. Though most themes have a default page for content that can’tbe found, you should also consider setting up a custom 404 error page.

Test Search Page:
Please check if the search page is accessible to users. You can check by navigating to http://yoursite.com/?s=Test.

Use & Test Pagination:
Test the pagination using WP-PageNavi plugin.

Make a Plugin List:
- SeedProd Coming Soon
- WordPress SEO by Yoast
- Google Analytics by Yoast
- BackUpWordPress
- WordPress Backup to dropbox
- Broken Link Checker
- Redirection
- Contact Form 7
- BBQ: Block Bad Queries
- WP-Optimize
- WP-PageNavi
- WP Super Cache
- iThemes Security
- Revision Control
- Error Log Monitor
- Jetpack
- The SEO Framework
- WP Statistics
- P3 – Plugin Performance Proﬁler.
- Piklist

Install
- taychions
- install font-awesome

Add Social Icons
Add social media icons/links for Facebook, Twitter, Google+, Pinterest, LinkedIn, etc. You may use AddThis, ShareThis or Share Bar Plugins.

Create Social Proﬁles:
- Facebook Fan Page
- Twitter
- Google Plus
- Pinterest

Add Favicon:
Add custom Favicon using Custom Favicon plugin.

Use Breadcrumb:
Don’t forget to use Breadcrumbs for easy navigation. It’s a part of WordPress SEO by Yoast Plugin

Link Logo:
Link the company logo to the Homepage.

Remove Lorem Ipsum:
Lastly, make sure you remove all the Lorem Ipsum text on the website.

----------------------------------------------------------------------------------------
Launch

Do Regular Backups Of Your Site:
Once your website is launched, its vital that you take regular back-ups. Use free plugins to back-up like; BackUpWordPress & WordPress Backup to Dropbox.

Check Content Structure:
Check the structure and content for everything including pages, categories, URL’s, submission forms, etc.

Update Admin Email:
Also, under Settings > General, check social links, contact info and admin email.

Test All Web Forms
Make sure all forms on your site (contact, order,,etc.) are submitting data correctly and that form emails are sent to the right places.

Ensure Cross Browswer Compatibility:
Check if your website is cross browser compatible by extensive testing. Free Trial with Cross Browser Testing.

Enable Site to be Crawled:
Uncheck the option under Settings > Reading of “Discourage search engines from indexing this site” and make website visible to search engines.

Disable Coming Soon Page:
Launch the plugin SeedProd and disable the “Coming Soon” page.

Test for Responsiveness:
Test your website is mobile friendly. Run Google’s Mobile Friendly. Test to determine the same.

Implement Security:
Make sure you have all the security in place, like password strength, ﬁles and folder permissions, etc. using the iThemes Security plugin.

Test 3rd Party Tools:
If you’re using external tools for CRM, ecom, marketing, or something else, double check that they are present on-site and working correctly.

Check Loading Speed:
Improve the page loading speed by using Google’s Page Speed Insights.

Compress Images:
Reduce all the image sizes by almost 50% by compressing the PNG & JPG ﬁles using TinyPNG or WP Smush it plugin.

Use Latest Version of WordPress:
Make sure you are using the latest version of WordPress. If not, ensure that you upgrade before you go live.

Upgrade Plugins:
It is also important to upgrade all the plugins on your website before going live.

Open URL in New Tab:
Check if all your external links are working by opening them in new tabs. Use code similar to this for links.

Test Social Buttons:
Check whether social sharing is in place, working properly, and includes the right platforms and proﬁles.

Check Broken Links:
It’s essential that you check for broken links on your website before going live. Use Broken Link Checker Plugin.

White Label (Optional):
If you are developing the WordPress website for a client, implement branded WordPress login page using White Label CMS Plugin.

Test Out Feeds:
If you have RSS, news, social, or other feeds on your WordPresssite, ensure they are working as they are supposed to before site launch.

Adhere To Accessability Guidelines:
Don’t forget to make sure your site is fully accessable to everyone. Make sure your site adheres to the WCAG.

Disable the Debug mode:
define('WP_DEBUG',false);

Increase Memory Limit:
define('WP_MEMORY_LIMIT','128M');

Clear trash:
define('EMPTY_TRASH_DAYS',10);

----------------------------------------------------------------------------------------
SEO

Manage 301 Redirects:
Manage your 301 redirection with the help of user Redirection Plugin.

Make Sure Your Site Can Be Crawled:
Site visibility can be turned on under the Settings > Reading. By default this is set to enabled. But if not just uncheck “Discourage search engines from indexing this site”.

Use H1 Tag:
Include just one H1 tag on each of your pages.

Use H2 Tag:
Use H2 tag only within the content for headers.

Use Alt text On All Images:
Add in ALT text to all images on your site. There’s a WP plugin to help you called “Search Friendly Images Plugin.

Test XML Sitemap:
Check if the Yoast’s WordPress SEO. Plugin’s in-built sitemap is working or else install Google XML Sitemap Plugin

Check Robots.txt:
A correctly placed and optimized Robots.txt ﬁle is important aspect of new website.

Compress Images:
Make sure you reduce the size of the images on your website. Use a plugin called WP Smush it

Check Duplicate Content:
Your content has to be original and that you have no duplicate content on your website. Use CopyScape.com

Interlink Content:
Interlinking your content with contextual links is a must when it comes to properly optimizing your website for SEO.

Link to External Links:
Make sure you link out to other resourceful websites, within your content. If it’s relevant, then link to it.

Optimize Site:
Anothetr high priority is to optimize your website. Use GTMetrix for HTML and Pingdom for WordPress, and it will help you to effectively clear errors.

Improve Page Loading Speed:
Speed is everything. Use Google’s PageSpeed Insights to improve your page loading speed.

Get Web Responsive:
UseGoogle’s Mobile Friendly Test to make sure your website is responsive and mobile device ready.

Schema Creator:
Schema Creator Plugin is a great tool to use to add structured schema data to your content.

Create Short URL:
Use a shorter URL for the pages.

www or non www:
Redirect the ‘www’ to ‘non-www’ or vice versa but stick to one

Signup for Webmaster Tools:
If you have found any issues with the website so far, sign up for Google’s Webmaster Tool and ﬁx those issues. Ensure that you have submitted both the ‘www’ as well as the ‘non-www’ versions.

Test Breadcrumb:
Ensure that links on Breadcrumbs are working.

Limit Meta Title:
Make sure that the Meta Title remains only 55 characters long, including the spaces. Yoast SEO has this feature inbuilt for you.

Meta Descriptions:
Meta Description should only contain 155 characters, including spaces.

Use Latent Semantic Indexing Keywords (LSI):
LSI Keywords are very important for SEO. Make sure you include enough in your content. Find LSI using Google Keyword Planner, UberSuggest.org or Google Search (hint: look for keywords at the bottom of the page after completing the search query)

Permalinks:
Make sure the permalink structure is set to your liking Settings > Permalinks and that each page URL contains its main keyword.

Submit for Local Listing:
Submit your site to Google Business if your site is about locally related content.

Check Analytics:
Get insightful data on your site by adding Google Analytics.

Check Onpage Content:
Check all the aspects related to OnPage SEO before going live.

Proofread Content:
Make sure you proofread the entire website to check for spelling and grammar errors, before going live.

Use a CDN (content delivery network):
Use a CDN (content delivery network) like MaxCDN to ensure better speed and usability.

Keyword Focus:
If you are using an SEO plugin, each post and page should also have a deﬁned focus keyword. This will give you important information on how to further optimize them.

Exclude IP from Analytics:
Exclude home and ofﬁce IP addresses in Google Analytics. More information on Excluding Internal Trafﬁc can be found on Google Analytic Help Section

Add Social Sharing Icons:
Don’t forget to include Social Media icons on all pages of the WordPress website. You may use AddThis, ShareThis or Share Bar Plugins.

----------------------------------------------------------------------------------------
Security

Block Directory Access:
To prevent access to all directories, you need to place this code inside your .htaccess ﬁle.
# Prevent folder browsing
Options All -Indexes

Keep An Eye On Your Site Performance:
Get regular and up to date reports of your website’s performance with this handy plugin – Plugin Performance Proﬁler Plugin.

Delete Install & Upgrade Files:
Be sure to delete /wp-admin/install.php and /wp-admin/upgrade.php after every WordPress installation or upgrade.

Limit Suspicious Login Attempts:
Use Limit Login Attempts or Login LockDown Plugins to limit the number of login attempts possible both through normal login and using auth cookies.

iThemes Security:
The most comprehensive, watertight security plugin around is, iThemes Security plugin. It’s free and takes care of almost all the security issues on a website.

Secure your wp-conﬁg ﬁle:
Wp-conﬁg.php ﬁle contains a lot of conﬁdential details of your site, so it’s vital that you protect it with your life! The way to protect this ﬁle is to simply place the following code in your .htaccess ﬁle on your server.
<files wp-config.php>
order allow,deny
deny from all
</files>

Disable Theme and Plugin Editor:
If you want to stop the editor links from appearing in the admin area you can add the following to your wp-conﬁg.php ﬁle so people cannot edit the theme directly in the admin area.
define('DISALLOW_FILE_EDIT',true);

Hide your WordPress Version:
It is important that you hide your current WordPress Version from the hackers. Add the following code to your function.php
function remove_version() {return “;}
add_filter("the_generator",'remove_version');

Hide Login Error messages:
Error login messages may expose your website and give hackers an idea if they’ve gotten username correct/incorrect, vice versa. It is wise to hide it from unauthorized login. To hide login error messages, simply put the following code in functions.php.
function wrong_login() {
return ‘Wrong username or password.’;
}
add_filter('login_errors','wrong_login');

Go live:
Once all these things are in place, you may either go live at this stage and follow the SEO Checklist after or vice-versa.

------------------------------------------------------------------------------------------------
Maintenance
Empty Spam Comments:
Tackle an attack of thousands of spam comments with the help of Delete Pending Comments Plugin.

Test Contact Forms Every Week:
Test the functioning of your Contact form by sending an inquiry through it.

Check Broken Links:
Look for broken links on your website with the CheckMyLink Extension for Chrome & Broken Link Checker for WordPress.

Post Revision Control:
Gain total control over your post revision system with Revision Control plugin.*

Reply to Comments:
Make sure you check your comments section and answer questions & interact regularly with your readers.

Update Plugins:
Keep a tab on plugin updates and upgrade them regularly.

Take Regular Backups:
Don’t forget to take backups of the latest databases and ﬁles using BackUpWordPress(Free) | BackupBuddy (Paid) | WordPress Backup to Dropbox (Free).

Clean Spam Comments:
Manage the thousands of spam comments with the help of Delete Pending Comments Plugin or Akismet.

Check Google Analytics:
Check Google Analytics regularly.

Review Webmaster Tools:
Similarly, check Google Webmaster Tools periodically. --}}
