@php $count = 0; @endphp
<section class="avenir" id="admin">
  <h2 class="avenir fw1">Administrative checklist</h2>
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
          <span class="task">Webmaster Tools</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Setup the following accounts:
          <ul>
            <li><a href="https://www.google.com/webmasters/#?modal_active=none" target="_blank">Google Webmaster tools</a></li>
            <li><a href="https://www.bing.com/toolbox/webmaster" target="_blank">Bing Webmaster tools</a></li>
            <li>Use <a href="https://developers.google.com/web/tools/lighthouse/" target="_blank">Google lighthouse</a> tools</li>
            <li><a href="https://marketingplatform.google.com/about/analytics/" target="_blank">Google Analytics</a> tools</li>
          </ul>
          If you have found any issues with the website so far, sign up for Google’s Webmaster Tool and ﬁx those issues. Ensure that you have submitted both the ‘www’ as well as the ‘non-www’ versions.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Adhere To Accessability Guidelines</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Don’t forget to make sure your site is fully accessable to everyone. Make sure your site adheres to the WCAG.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Manage 301 Redirect</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Manage your 301 redirection with the help of user Redirection Plugin.<br>
          Identify bad redirects with <a href="https://www.clickminded.com/301-redirect-wordpress/" target="_blank">Clickminded</a> and <a href="http://www.browseo.net " target="_blank">Browseo</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Ensure Your Site Can Be Crawled</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Site visibility can be turned on under the <code>Settings > Reading</code>. By default this is set to enabled. But if not just uncheck <code>“Discourage search engines from indexing this site”</code>.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"   type="checkbox" value="" id="check1">
          <span class="task">H1 Tag</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Ensure you include just one H1 tag on each of your pages.  Add your keyword to your H1 tag, and make sure to <b>only use one</b>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">H2 Tag</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use H2 tag only within the content for headers.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Images</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">15m @php($count += 15)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li>Add Title Text to your Images</li>
            <li>Add in ALT text to all images on your site. There’s a WP plugin to help you called <a href="https://wordpress.org/plugins/pb-seo-friendly-images/" target="_blank">Friendly Images</a> Plugin.</li>
            <li>Learn more <a href="https://www.clickminded.com/alt-text-attributes/" target="_blank">here</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">XML Sitemap</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check if The SEO Framework generates the sitemaps for you. You could also use:
          <ul>
            <li><a href="https://www.xml-sitemaps.com" target="_blank">XML Sitemaps</a></li>
            <li><a href="https://wordpress.org/plugins/google-sitemap-generator/" target="_blank">Google sitemap generator</a></li>
          </ul>
          Submit Sitemaps to google and bing
          <ul>
            <li><a href="https://search.google.com/search-console/about" target="_blank">Google Search Console</a></li>
            <li><a href="https://www.bing.com/toolbox/webmaster" target="_blank">Bing webmaster tools</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Compressed Images</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Make sure you reduce the size of the images on your website. Use a plugin called <a href="https://wordpress.org/plugins/wp-smushit/" target="_blank">WP Smush it</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">HTML Sitemap</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          In addition to XML Sitemaps, for more corporate type sites with several levels of pages an HTML Sitemap might actually be very beneficial for both users and search engine
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Check Robots.txt</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          A correctly placed and optimized Robots.txt ﬁle is important aspect of new website. Create a robots.txt file and submit it to <a href="https://search.google.com/search-console/about">Google Search Console</a>.
          For more information please vist <a href="https://support.google.com/webmasters/answer/6062596?hl=en">Google Support</a>
        </div>
      </div>
    </li>



    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Subscribe to comment</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Subscribe to comment plugin
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Check Duplicate Content</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Your content has to be original and that you have no duplicate content on your website. <br>
          Use <a href="http://copyscape.com/" target="_blank">Copy Scape</a> (this includes, pages, posts, categories and tags, etc)
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">SSL Implementation</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check if SSL is active, otherwise install a valid SSL certificate in your hosting. For example Lets encrypt
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Setup Google Tag Manager</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://marketingplatform.google.com/about/tag-manager/">Google Tag Manager</a></li>
            <li>Learn more <a href="https://www.clickminded.com/google-tag-manager-wordpress/">Here</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Speed Test</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Improve Page Loading Speed:	30m	Speed is everything. Checkout the following tools:
          <ul class="pa0">
            <li><a href="#" target="_blank">Google’s PageSpeed Insights</a></li>
            <li><a href="https://tools.pingdom.com" target="_blank">Pingdom Website Speedtest Tools</a></li>
            <li><a href="https://www.giftofspeed.com" target="_blank">Gif to Speed</a></li>
            <li><a href="https://gtmetrix.com" target="_blank">GTMetrix</a></li>
            <li><a href="https://www.webpagetest.org" target="_blank">Webpage Test</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Mobile Friendly</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <a href="https://search.google.com/test/mobile-friendly" target="_blank">Google Mobile Friendly</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Disable archives or unused pages</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Unpublish or delete archives and/or pages that are not useful anymore
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough" type="checkbox" value="" id="check1">
          <span class="task">Optimize your titles SEO</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://moz.com/learn/seo/title-tag" target="_blank">Tips from Mozilla</a></li>
            <li><a href=" https://www.clickminded.com/website-html-title-tags/" target="_blank">Tips from Clickinmind</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Schema</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Schema Creator Plugin is a great tool to use to add structured schema data to your content. <br>
          Learn more about <a href="https://kinsta.com/blog/schema-markup-wordpress/" target="_blank">Schema Markup</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Use CDN</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Try to load files from CDN Sources. Use a CDN (content delivery network) like MaxCDN to ensure better speed and usability.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"   type="checkbox" value="" id="check1">
          <span class="task">Cache plugins</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Install a caching plugin like:
          <ul>
            <li><a href="#" target="_blank">W3 Total Cache</a></li>
            <li><a href="#" target="_blank">WP Super Cache</a></li>
            <li><a href="#" target="_blank">WP Rocket</a></li>
            <li><a href="#" target="_blank">Cache Enabler</a> </li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"   type="checkbox" value="" id="check1">
          <span class="task">Rethink that sidebar</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Remove sidebars that are not related to content
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">www or non www</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Redirect the ‘www’ to ‘non-www’ or vice versa but stick to one
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Smart image file names</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Check if Images use Smart Image File Names, don’t be lazy and leave D00003.jpg
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Post to pages</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          If a post is very popular and important, copy the post content into a new page and redirect traffic
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Related posts</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Activate this options with jetpack
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">No-follow links</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Add no-follow links. It is very important. <a href="https://kinsta.com/knowledgebase/add-nofollow-links-in-wordpress/" target="_blank">Learn more</a><br>
          <b>Afiliate links should be no-follow</b>. Some sites have even got penalized for having a lot of affiliate links safely use affiliate links, they should always be nofollow
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Check Canonical elements</span>
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
          <span class="task">Test Breadcrumb</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Ensure that links on Breadcrumbs are working.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Limit Meta Title</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Make sure that the Meta Title remains only 55 characters long, including the spaces.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Meta Descriptions</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Meta Descriptions:	5m	"Meta Description should only contain 155 characters, including spaces.
          https://www.clickminded.com/meta-description/ https://neilpatel.com/blog/meta-description-magic/"
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">LSI</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Use Latent Semantic Indexing Keywords (LSI). LSI Keywords are very important for SEO. Make sure you include enough in your content. Find LSI using Google Keyword Planner, UberSuggest.org or Google Search (hint: look for keywords at the bottom of the page after completing the search query)
          <ul>
            <li><a href="https://lsigraph.com" target="_blank">LSI Graph</a></li>
            <li><a href="https://www.clickminded.com/latent-semantic-indexing/" target="_blank">Clickminded</a></li>
            <a href="#" target="_blank"></a>
          </ul>


        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Friendly Permalinks</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">5m @php($count += 5)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Make sure the permalink structure is set to your liking Settings > Permalinks and that each page URL contains its main keyword.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Check Analytics</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Get insightful data on your site by adding Google Analytics and Google Search Console <br>
          Don't forget to Exclude home and ofﬁce IP addresses in Google Analytics. More information on Excluding Internal Trafﬁc can be found on Google Analytic Help Section
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Perform keyword research</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://kwfinder.com/" target="_blank">KW Finder</a></li>
            <li><a href="https://keywordtool.io" target="_blank">Keyword tool</a></li>
            <li><a href="https://www.semrush.com https://ads.google.com/home/tools/keyword-planner/" target="_blank">Semrush</a></li>
            <li>Track keyword ranking <a href="https://www.accuranker.com" target="_blank">Accuranker</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">URL Permalinks</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li>URL Structures <a href="https://moz.com/blog/15-seo-best-practices-for-structuring-urls" target="_blank">Learn more</a></li>
            <li>Create Short URL Use a shorter URL for the pages.</li>
            <li>Stopwords		When you publish new content, you may also wish to consider removing ‘stopwords’ from your permalinks. These are words like “a”, “and”, and “the”.</li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Add Social Sharing Icons</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Include Social Media icons on all pages of the WordPress website. You may use AddThis, ShareThis or Share Bar Plugins.<br>
          Utilize Social Signals <br>
          Social Markup
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Broken links</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Look for broken links, errors, and crawl problems. Use the Broken link plugin
          <ul>
            <li><a href="https://www.screamingfrog.co.uk/seo-spider/" target="_blank">Screaming Frog</a></li>
            <li><a href="https://www.clickminded.com/http-status-codes/" target="_blank">Clickminded</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Perform an audit SEO</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://www.clickminded.com/seo-check-site-analysis/" target="_blank">Clickminded</a></li>
            <li><a href="https://seositecheckup.com" target="_blank">SEO Site Checkup</a></li>
            <li><a href="https://varvy.com" target="_blank">Varvy</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Force Crawl for Faster Indexing</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          To force crawl a WordPress post or page simply click into the “Fetch as Google” option under Crawl in Google Search Console and input the URL. Click on “Fetch.”
          <ul>
            <li><a href="https://search.google.com/search-console/about" target="_blank">Google Search Console</a></li>
            <li><a href="https://www.bing.com/toolbox/webmaster" target="_blank"> Bing Webmaster Tools</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Negative SEO</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://kinsta.com/blog/negative-seo/" target="_blank">Kinsta negative seo</a></li>
            <li><a href="https://www.google.com/webmasters/tools/disavow-links-main?pli=1" target="_blank">Google Webmaster tools</a></li>
            <li><a href="https://kinsta.com/blog/decline-seo-rankings/" target="_blank">Kinsta decline seo ranking</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Claim Social Profiles</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Another tip is to claim all of your social media profiles ASAP. Check <a href="https://namechk.com" target="_blank">Namechck</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Local SEO</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Submit your site to <a href="https://www.google.com/business/" target="_blank">Google Business</a> and <a href="https://www.bingplaces.com" target="_blank">Bing Places</a> if your site is about locally related content.
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Google Image Search</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Traffic from images can actually add up to quite a bit over time so it is important to verify that your images are getting indexed. <a href="https://search.google.com/search-console/about?hl=en&utm_source=wmx&utm_medium=wmx-welcome" target="_blank">Google Search Console</a>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Don’t Index Image Attachment Pages</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Whenever you upload an image and insert the normal way it creates a separate WordPress attachment page on which the image resides on. If you aren’t careful Google might actually start indexing these pages, which is sometimes not a good thing. If someone hits an image attachment page all they will see is the image, and not the content that is on the post. This will most likely result in them leaving immediately simply causing your bounce rate to go up
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Multi-language WordPress</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Multi-language WordPress SEO Adding additional languages to your site can be a huge game changer when it comes to WordPress SEO and traffic
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Index WordPress Categories</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          is optional but indexing categories in Google can also increase the relevancy of your content to boost page rank and increase your traffic and improve your WordPress SEO
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task"></span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Google Knowledge Graph	Unfortunately, there is no magic recipe to achieve this 100% of the time, but from our personal experience by adding schema markup and also using headers and bullet lists as they were meant to be, can help you achieve the coveted Google Knowledge Graph
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task"></span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Last Updated Date in SERPs		"you might want to change the dates to last updated
          <?php the_time('F j Y'); ?>
          Last updated on <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('F jS, Y'); ?></time>"
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Evaluate your competition</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          <ul>
            <li><a href="https://www.clearvoice.com" target="_blank">Clear Voice</a></li>
            <li><a href="https://moz.com/link-explorer/" target="_blank">Moz Link explorer</a></li>
            <li><a href="https://majestic.com" target="_blank">Majestic</a></li>
          </ul>
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task"></span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          More on SEO and tools		"https://www.clickminded.com/on-page-seo/ https://ahrefs.com/pricing
          https://namechk.com"
        </div>
      </div>
    </li>

    <li>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-11 col-lg-2 b">
          <input class="form-check-input strikethrough"  type="checkbox" value="" id="check1">
          <span class="task">Use & Test Pagination</span>
        </div>
        <div class="col-12 col-sm-2 col-md-1 col-lg-1">10m @php($count += 10)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
          Test the pagination using WP-PageNavi plugin.
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
